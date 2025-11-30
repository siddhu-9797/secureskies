<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $record = [
            'time'        => date('c'),
            //'ip'          => $_SERVER['REMOTE_ADDR'] ?? '',
            'name'        => $_POST['name'] ?? '',
            'card_number' => $_POST['card_number'] ?? '',
            'expiry'      => $_POST['expiry'] ?? '',
            'cvv'         => $_POST['cvv'] ?? ''
        ];
        $file = __DIR__ . '/db.json';
        file_put_contents($file, json_encode($record, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND | LOCK_EX);

        header('Location: shop2.php?success=1');
        exit;
}

$page_title = "SECURE SKIES Drones - Shop";
include 'navbar.php';
?>

        <div class="container">
            <h2 class="page-title">🛒 Complete Your Drone Purchase</h2>
            <form id="paymentForm" method="POST" action="shop2.php">
                <div class="form-group">
                    <label for="card_number">💳 Card Number</label>
                    <input type="text" id="card_number" name="card_number" value="4111 1111 1111 1111" required>
                </div>
                
                <div class="form-group">
                    <label for="expiry">📅 Expiry Date</label>
                    <input type="text" id="expiry" name="expiry" value="12/34" required>
                </div>
                
                <div class="form-group">
                    <label for="cvv">🔒 CVV</label>
                    <input type="text" id="cvv" name="cvv" value="123" required>
                </div>
                
                <div class="form-group">
                    <label for="name">👤 Name on Card</label>
                    <input type="text" id="name" name="name" value="John Doe" required>
                </div>
                
                <button type="submit">🛸 Complete Drone Purchase - $1,299</button>
            </form>
            
            <div id="receipt-link"></div>
            
            <!--
            <script>
            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                //e.preventDefault();
                // Always show receipt link for demo (simulate receipt ID = 1)
                document.getElementById('receipt-link').innerHTML = `<div class='alert alert-success'>✅ Drone purchase successful! <a href='receipt.php?id=1' style='color: #155724; font-weight: bold;'>View Order Confirmation →</a></div>`;
            });
            </script>
            -->
            
            <div id="receipt-link">
                <?php if (isset($_GET['success'])): ?>
                    <div class='alert alert-success'>✅ Drone purchase successful!</div>
                    <div class="receipt-card">
                        <h3>🚁 Order Confirmation (Save this info for future use)</h3>
                        <p><strong>Order ID:</strong> #ORD-<?= rand(10000, 99999) ?></p>
                        <p><strong>Customer:</strong> <?= htmlspecialchars($_POST['name'] ?? 'John Doe') ?></p>
                        <p><strong>Product:</strong> SECURE SKIES Pro X1 Drone</p>
                        <p><strong>Price:</strong> $1,299.00</p>
                        <p><strong>Order Date:</strong> <?= date('M d, Y') ?></p>
                        <p><strong>Status:</strong> <span style="color: #28a745; font-weight: bold;">✅ Confirmed - Ships in 2-3 days</span></p>
                    </div>
                <?php endif; ?>
            </div>

            <a href="index.php" class="back-link">← Back to Home</a>
        </div>

<?php include 'footer.php'; ?>
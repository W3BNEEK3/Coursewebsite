<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $sender_name = $_POST['sender_name'];
    $receiver_name = $_POST['receiver_name'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    // Get sender and receiver IDs (assuming you have them stored in the session or database)
    $sender_id = $_SESSION['user_id']; // You should have the sender's user ID after login
    $receiver_id = $_POST['receiver_id']; // Assuming you have the receiver's user ID

    // Insert transaction data into database
    $stmt = $conn->prepare("INSERT INTO transactions (sender_id, receiver_id, amount, status, description) VALUES (?, ?, ?, ?, ?)");
    $status = 'pending'; // Default status, could change based on business logic
    $stmt->bind_param("iiiss", $sender_id, $receiver_id, $amount, $status, $description);

    if ($stmt->execute()) {
        // Get the transaction ID and other details for the receipt
        $transaction_id = $stmt->insert_id;
        $date = date('Y-m-d H:i:s'); // Get current date/time

        // Generate the receipt (HTML format)
        $receipt = "
        <h2>Transaction Receipt</h2>
        <p><strong>Transaction ID:</strong> $transaction_id</p>
        <p><strong>Sender:</strong> $sender_name</p>
        <p><strong>Receiver:</strong> $receiver_name</p>
        <p><strong>Amount:</strong> $amount</p>
        <p><strong>Date:</strong> $date</p>
        <p><strong>Status:</strong> $status</p>
        <p><strong>Description:</strong> $description</p>
        <button onclick='window.print();'>Print Receipt</button>
        ";

        // Output receipt
        echo $receipt;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!-- HTML Form for Escrow -->
<fieldset>
    <legend>Escrow Transaction Form</legend>
    <form method="POST">
        <input name="sender_name" placeholder="Sender Name" required><br>
        <input name="receiver_name" placeholder="Receiver Name" required><br>
        <input name="amount" type="number" placeholder="Amount" required><br>
        <input name="description" placeholder="Description" required><br>
        <input name="receiver_id" type="hidden" value="2"> <!-- Example receiver ID, replace with actual -->
        <button type="submit">Submit</button>
    </form>
</fieldset>

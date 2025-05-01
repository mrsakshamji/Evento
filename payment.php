<?php
$apikey = "rzp_test_75zZXgdoVpEdii";
$order_id = 'OID' . rand(10, 100) . 'END';
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="payment_success_page.php" method="POST">
    <script
       src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apikey; ?>" 
        data-amount="100" 
        data-currency="INR"
        data-id="<?php echo $order_id; ?>"
        data-buttontext="Pay with Razorpay"
        data-name="Evento"
        data-description="Evento – Coding, Quiz Competition!"
        data-image="https://eventos.kesug.com/Images/online-event-registration.png"
        data-prefill.name=""
        data-prefill.email=""
        data-prefill.contact=""
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hidden Element" name="hidden"/>
</form>

<style>
    .razorpay-payment-button{
        display: none;
    }
</style>
<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>
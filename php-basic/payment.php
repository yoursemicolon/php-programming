<?php 

interface PaymentInterface {
    public function getPayment();
    public function updatePaymentStatus();
}

class CreditCard implements PaymenInterface {
    public function getPayment() {
        // cek status koneksi ke server
        echo "Checking credit card server..\n";
    }

    public function updatePaymentStatus() {
        // mengirim request untuk pembayaran
        echo "Issue sent! \n";
    }
}

class Dana implements PaymenInterface {
    public function getPayment() {
        // cek status koneksi ke server
        echo "Checking Dana server..\n";
    }

    public function updatePaymentStatus() {
        // mengirim request untuk pembayaran
        echo "Issue sent! \n";
    }
}

// Mengambil data pilihan pembayaran dari user
$option = 'Credit card';
$payment = NULL;

if($option == 'Dana') {
    $payment = new Dana;

    $payment->getPayment();
    $payment->updatePaymentStatus();

} else if($option == 'Credit card') {
    $payment = 'Credit card';

    $payment->getStatus();
    $payment->updatePaymentStatus();
}

interface PaymentInterface {
    public function getPayment();
    public function updatePaymentStatus();
}

class PaymentFactory {
    // create concrete class
    public function getInstance($class) {
        return new $class;
    }
}
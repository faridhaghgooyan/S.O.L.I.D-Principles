<h1 align="center">Dependency Inversion Principle (DIP) | PHP | Example 01</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/faridhaghgooyan/programming-challenges?label=PHP&color=56BEB8&language=php">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/faridhaghgooyan/programming-challenges?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/faridhaghgooyan/programming-challenges?color=56BEB8">


  <img alt="Github stars" src="https://img.shields.io/github/stars/faridhaghgooyan/programming-challenges?color=56BEB8" />
</p>


<p align="center">
  <a href="#x-bad-example">Bad Example</a> &#xa0; | &#xa0; 
  <a href="#white_check_mark-good-example">Good Example</a> &#xa0; | &#xa0;
  <a href="#memo-Sources">About Author</a> 
</p>

<br>

## :x: Bad Example ##

```bash
class PaymentProcessor {
    public function processPayment($amount, $gateway) {
        if ($gateway === 'paypal') {
            // Code to process payment via PayPal
        } elseif ($gateway === 'stripe') {
            // Code to process payment via Stripe
        }
    }
}

```

## :white_check_mark: Good Example ##

```bash
interface PaymentGatewayInterface {
    public function processPayment($amount);
}

class PayPalPaymentGateway implements PaymentGatewayInterface {
    public function processPayment($amount) {
        // Code to process payment via PayPal
    }
}

class StripePaymentGateway implements PaymentGatewayInterface {
    public function processPayment($amount) {
        // Code to process payment via Stripe
    }
}

class PaymentProcessor {
    private $gateway;

    public function __construct(PaymentGatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function processPayment($amount) {
        $this->gateway->processPayment($amount);
    }
}


```




## :memo: Sources ##

- Author : Farid Haghgooyan
- [Linkedin](https://www.linkedin.com/in/farid-haghgooyan/)
- [website](https://mrhaghgooyan.com/)


<a href="#top">Back to top</a>

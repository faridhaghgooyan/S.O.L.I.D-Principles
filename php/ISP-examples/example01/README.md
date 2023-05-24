<h1 align="center">Interface Segregation Principle (ISP) | PHP | Example 01</h1>

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
interface CarInterface {
    public function start();
    public function drive();
    public function stop();
}

class Sedan implements CarInterface {
    public function start() {
        // Code to start a sedan car
    }

    public function drive() {
        // Code to drive a sedan car
    }

    public function stop() {
        // Code to stop a sedan car
    }
}

class SportsCar implements CarInterface {
    public function start() {
        // Code to start a sports car
    }

    public function drive() {
        // Code to drive a sports car
    }

    public function stop() {
        // Code to stop a sports car
    }
}

```

## :white_check_mark: Good Example ##

```bash
interface CarInterface {
    public function start();
    public function accelerate();
    public function brake();
}

class Sedan implements CarInterface {
    public function start() {
        // Code to start a sedan car
    }

    public function accelerate() {
        // Code to accelerate a sedan car
    }

    public function brake() {
        // Code to brake a sedan car
    }
}

class SportsCar implements CarInterface {
    public function start() {
        // Code to start a sports car
    }

    public function accelerate() {
        // Code to accelerate a sports car
    }

    public function brake() {
        // Code to brake a sports car
    }
}


```




## :memo: Sources ##

- Author : Farid Haghgooyan
- [Linkedin](https://www.linkedin.com/in/farid-haghgooyan/)
- [website](https://mrhaghgooyan.com/)


<a href="#top">Back to top</a>

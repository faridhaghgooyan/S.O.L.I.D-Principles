<h1 align="center">Open/Closed Principle (OCP) | PHP | Example 01</h1>

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
The bad example violates the OCP by requiring modification of the Shape class whenever a new shape is introduced.

```bash
class Shape {
    public function calculateArea($type) {
        if ($type === 'rectangle') {
            // Rectangle area calculation logic
        } elseif ($type === 'circle') {
            // Circle area calculation logic
        }
    }
}

```

## :white_check_mark: Good Example ##
The code follows the OCP by allowing the introduction of new shapes (classes) without modifying existing code.

```bash
interface Shape {
    public function calculateArea();
}

class Rectangle implements Shape {
    public function calculateArea() {
        // Rectangle area calculation logic
    }
}

class Circle implements Shape {
    public function calculateArea() {
        // Circle area calculation logic
    }
}

```




## :memo: Sources ##

- Author : Farid Haghgooyan
- [Linkedin](https://www.linkedin.com/in/farid-haghgooyan/)
- [website](https://mrhaghgooyan.com/)


<a href="#top">Back to top</a>

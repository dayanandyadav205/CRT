
let c = 12;
let d = 13;
console.log("c+d is", c+d);

// variable is basically a container
const name = "Anuj";
const Name="Ajay"
// let age = 26; //declaration + initialization
// const salary=40000;


// console.log("age=", age);
// age=28;

// console.log("age=", age);
console.log("name=", name);
console.log("Name=", Name);

// let name='Dayanand';
// console.log(name);

// VARIABLES OR CONTAINERS
// RULES TO DECLARE VARIABLES
// 1. Cannot be a reserved keyword
// 2. Should be meaningful
// 3. Cannot start with a number
// 4. Cannot contain a space or hyphen (-)
// 5. Are case-sensative

// Wrong Practice
// let firstName = 'Dayanand', lastName = 'Yadav'; 

// Modern best practice
// let firstName = 'Dayanad';
// let lastName = 'Yadav';


// let interestRate = 0.3;
// interestRate = 0.5;
// console.log(interestRate);

// const interestRate = 0.3;
// interestRate = 0.5;
// console.log(interestRate);


// JavaScript Variables
x = 5;
y = 6;
z = x + y;
console.log(z);

// let x = 5;
// let y = 6; 
// let z = x + y;

// const x = 5;
// const y = 6;
// const z = x + y;


// ==========================================

// DataTypes


// // let a=23;

// a='Anuj';

// // a=false;
// console.log('The value of a is', a);
// console.log('the type of a is=', typeof(a));


// // Primitives/Value Types
// // 1. String
// // 2. Number
// // 3. Boolean
// // 4. undefined
// // 5. null

// // let name = 'Dayanand'; // String Literal
// // let age = 30; // Number Literal
// // let isApproved = false; // Boolean Literal
// // let firstName = undefined;
// // let selectedColor = null;


// // DYNAMIC TYPING

// // ===============================

// // Reference Types
// // 1. Objects
// // 2. Arrays
// // 3. Functions

// let name = 'Dayanand';
// let age = 30;

// // 1. Object Literal
// let person = {
//     name:'Dayanand', 
//     age: 30
// };

// console.log(person);

// // Dot Notation
// person.name = 'Deepak';

// console.log(person.name);
// console.log(person.age);

// // Bracket Notation
// person['name']= 'Dev';

// console.log(person.name);


// // 2. Arrays Literals

// let selectedColors = ['red', 'blue'];
// selectedColors[2] = 1;
// console.log(selectedColors[0]); 

// // Properties of Array
// console.log(selectedColors.length);
// console.log(selectedColors.pop(0));
// console.log(selectedColors.push(''));
// console.log(selectedColors);


// // 3. Functions  Literals

// function greet(){
//     console.log('Hello World');
// }

// greet()

// // Type of Functions
// // Function with argument
// function greet(name){
//     console.log('Hello ' + name);
// }

// greet('Dayanand');

// // Performing a task
// function greet(name, lastName){
//     console.log('Hello ' + name + lastName);
// }

// greet('Dayanand ', 'Yadav');

// // Calculating a value
// // Function definition
// function square(number){
//    return number * number;
// }

// // Function calling
// console.log(square(2));




// var num1=prompt("Enter the value of num1");
// var num2=prompt("Enter the value of num2");
// alert("result="  + (parseFloat(num1) + parseFloat(num2)));

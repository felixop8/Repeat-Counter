# _Address Book_

https://afternoon-headland-46464.herokuapp.com/

#### _Website in Silex that returns how frequently a word appears in a given string._
#### _By Félix Oporto_
| [<img src=https://avatars1.githubusercontent.com/u/20342423?v=3&s=460 width="100px;"/><br /><sub>Felix Oporto</sub>](https://github.com/felixop8) |
| :---: |


## Description

_Web app that return how frequently a word appears in a given string. This website has been created as a project for the second week of php at Epicodus. It serves as a demonstration of the use of Behavior-driven development(BDD) and Red-Green-Refactor._

## Specifications


&nbsp;
## Specifications

|Behavior|Input 1 // Input 2|Output|Explanation of Values|Simplest Way to Test Behavior|
|--------|-----|------|---------------------|-----------------------------|
| Program will recognize one word and another word as the same | "shiny" // "shiny" | 1 | These inputs were chosen because they are equal. This and all future outputs were chosen because they are simple numerical representations of the specified relationship between the first and second input | This behavior can be tested by comparing input 1 to input 2 |
| Program will recognize no occurrences of a word within a phrase | "shiny" // "boots of leather" | 0 | These inputs were chosen because they are a simple example of a word that does not occur in a phrase | This behavior can be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find one occurrence of a word within a phrase | "shiny" // "shiny boots of leather" | 1 | These inputs were chosen because there is only one occurrence of input 1 in input 2 | This behavior can also be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find all occurrences of word within a phrase | "shiny" // "shiny shiny shiny boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times | This behavior can also be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find all occurrences of word within a phrase regardless of case | "ShInY" // "shiny SHINY ShInY boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times but the case does not match 2 out of three times | This behavior can be tested by changing input one and input two to all lower case before splitting input 2 and comparing |
| Program will find all occurrences of word within a phrase regardless of punctuation | "ShInY" // "Shiny? Shiny! ..Shiny.. boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times but each occurrence of input 1 in input 2 has adjacent punctuation | This behavior can be tested by searching input 2 and removing all occurrences of a predefined set of punctuation characters |

## Setup/Installation Requirements

* _Clone this repository._
* _Check that you have composer installed (https://getcomposer.org/)_
* _Run "composer install" from the project directory in terminal. This will install the required dependencies (Silex and Twig) in the project directory._
* _Open terminal and navigate to the folder "web", inside of this folder you need to set up  a server by typing php -S localhost:8000._
* _Go to your browser and type http://www.localhost8000/._


## Known Bugs

_No known bugs._

## Support and contact details

Please direct questions  to the author:
  * felixop8@gmail.com


## Technologies Used
  - html
  - css
  - bootstrap
  - php
  - composer
  - silex
  - twig
  - Heroku


## License
MIT Commons
Copyright (c) 2017 Felix Oporto Lopez.

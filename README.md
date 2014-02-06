## Instructions

1. Create a fork of this repository in your private namespace on Gitlab. Find button "Fork repository" on this page http://gitlab-test.trikoder.net/trikoder/assignment1

2. Clone your fork of the repository and do the assignment.

3. Once you are done with your assignment, push the changes to your forked repository on Gitlab.

## Assignment

Design an object hierarchy needed to implement standard invoice. Invoice object contains a number of Invoice item objects each of which contains a Product object. Object classes are defined by the following rules:

Invoice must contain at least an:

* unique, sequential invoice number
* date of creation
* due date
* total brutto amount
* total tax amount (assume fixed 25% tax rate) 
* and a textual info about customer (name, address etc.)

Invoice item contain at least a:

* Product entity
* amount of product
* item price
* total price

Product must contain at least a:

* name
* category (assume predefined flat list of categories)

The task is to create all required PHP files for implementing models described above, respecting the following rules:

* only native PHP can be used - no frameworks are allowed
* code must be fully PSR compliant (including directory structure)
* code must be covered (to a sensible degree) with unit tests (PHPUnit should be used)

### Good luck!

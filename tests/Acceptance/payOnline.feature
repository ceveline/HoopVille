Feature: Paying online

As a customer, I want to be able to pay online, so that I can avoid the hassle of making payments in person.
 
Scenario: Customer selects online payment method
Given the customer is making a reservation for “2PM on April 15th” for a "basket”
When the customer selects the payment method as “online payment”
Then the customer should be able to enter their credit card information
And the customer clicks the “book” button


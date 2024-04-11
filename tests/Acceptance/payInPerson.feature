Feature: Paying in person

As a customer, I want to be able to have the option to pay in person, so that I will be able to pay cash.

Scenario: Customer selects in person payment method
Given the customer is making a reservation for “2PM, April 15th” for a “basket”
When the customer selects the payment method as “in person” payment
Then the customer should enter their credit card information as a “hold payment” in case of a no show
And the customer clicks the “book” button
Then the customer should receive a message confirming their reservation


Feature: Editing a review

As a customer, I want to be able to edit reviews, so that I can update my feedback or correct any inaccuracies to provide more helpful and accurate information to other users.

Scenario: Customer edits a review
Given that Joe has previously submitted a review for his “2PM, april 15th” booking of a “basket”,  “it was a nice experiencees”
When Joe selects the option to edit the review at “2PM, april 15th” for the booking of “basket”
Then the review should be successfully edited to the review “it was a nice experience”
And the review should be successfully edited to “2PM, april 15th” booking of a “basket”,  “it was a nice experience”


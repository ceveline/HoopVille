Feature: Deleting a review

As a customer, I want to be able to delete reviews, so that if my reviews are no longer relevant, I can ensure that only pertinent information is available to other users.

Scenario: Customer deletes a review
Given that Joe has previously submitted a review for his “2PM, april 15th” booking of a “basket”
When Joe selects the option to delete his review
Then the review should be successfully deleted
And the review should disappear from the review list


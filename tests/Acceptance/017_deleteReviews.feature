Feature: Deleting a review
  In order to remove reviews that are no longer relevant
  As a logged-in user
  I want to be able to delete reviews

Scenario: Delete a review
  Given I am on /User/myAccount/
  And I have an existing review that says "Amazing Experience!"
  When I click the "delete" the option to delete this review
  Then I will be navigated to "/User/Reviews/deleteReview/1"
  And I click "I am sure I want to delete this review"
  Then the review should be successfully deleted from the platform



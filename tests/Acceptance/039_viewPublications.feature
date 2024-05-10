Feature: View Publications
In order to view all the posts the admins have made to update us on hoopville
As a logged-in user
I want to be able to view the publications

Scenario: View Publications
Given I am on "/User/Home/"
And I navigate to  "/User/Publications/"
Then I should see a list of all publications

Feature: filter articles by keyword
  In order to search through the different articles
  As a user
  I need to be able to filter the articles based on a desired keyword

  Scenario: filer articles by keyword
	Given I am on "/User/services"
	Then I will see a search bar to filter
	When I click the search bar
	And I enter a string
	Then I will only see articles containing the given input from the search bar


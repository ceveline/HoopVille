Feature: filter articles by keyword
  In order to search through the different articles
  As a user
  I need to be able to filter the articles based on a desired keyword

  Scenario: filer articles by keyword
	Given I am on "/User/articles"
	Then I will see a search bar to filter
	And I enter a "Tournament"
	Then I will only see articles containing "tournament" in their content


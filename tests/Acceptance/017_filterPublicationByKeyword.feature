Feature: 017_filterPublicationByKeyword
  In order to search through publications
  As a logged-in user
  I need to filter publications based on a keyword

  Scenario: Filter publications by keyword
	Given I am on "/Publication
	And I enter "tournament" in the search bar field
	And I click search
	Then I should be redirected to "/Publication" with publications containing "tournament"

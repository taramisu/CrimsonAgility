# CrimsonAgility Magento Exercise – Products in Range

This module is built on fresh install of Magento 2.4

# Module 

`MagentoExercise_ProductsInRange` module creates a new section in the customer account tab.

Three input fields created: low price, high price, and sort. 

Form validation is implemented for a fields and not able to submit until validated.


## Ajax details

On form submit the ajax sends an post request and validates the XHR response and navigates to the the result page defined.

## Issues/Blockers

I was able to output the values of ajax response in the Products controller phtml template, but struggled with sending that data to the Result controller to output the response data from the block in order to move forward with products outputting in price range result page. 

Please review module and look foward to feedback on this exercise!




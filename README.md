Cybersource-secure-acceptance-demo
==================================

Working version of demo code provided by Cybersource to create a payment token using silent post secure acceptance method

I had the hardest time working with Cybersource Secure Acceptance service. I found multiple versions of documentation, each with different information like what endpoint to hit. 

The PHP demo code provided in the docs was missing pretty much everything needed to make a successful call aand create a payment token. Using the code provided by Cybersource, I had to figure out what parameters I was missing on each call. The only error message that was returned to me and recorded in the logs was "missing or invalid request parameter". 

I updated the code and it should work out-of-the-box.

Create your profiles here: https://ebctest.cybersource.com.
Note that you need to contact Cybersource to enable the secure acception option for your test account.
Once Secure Acceptance has been added to your account, create a profile. The profile will provide the profile_id, access_key, and secret_key required in security.php. Set the customer response page to http://<your_test_domain>/receipt.php

*Warning* The following doc has the wrong endpoints: 
Docs 1: http://apps.cybersource.com/library/documentation/dev_guides/Secure_Acceptance_WM/html/wwhelp/wwhimpl/js/html/wwhelp.htm#href=create_token.07.1.html

*Preferred Docs*
Docs 2: http://apps.cybersource.com/library/documentation/dev_guides/Secure_Acceptance_WM/Secure_Acceptance_WM.pdf?searchid=1413330942690

Good luck!

Cybersource-secure-acceptance-demo
==================================

Working version of demo code provided by Cybersource to create a payment token using silent post secure acceptance method

I had the hardest time working with Cybersource Secure Acceptance service. I found multiple versions of documentation, each with different information like what endpoint to hit. 

The PHP demo code provided in the docs was missing pretty much everything needed to make a successful call aand create a payment token. Using the code provided by Cybersource, I had to figure out what parameters I was missing on each call. The only error message that was returned to me and recorded in the logs was "missing or invalid request parameter". 

I updated the code and it should work out-of-the-box.

Good luck!

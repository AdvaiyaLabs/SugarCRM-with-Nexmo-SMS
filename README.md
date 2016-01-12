#SugarCRM with Nexmo SMS#

<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image1.png" width="200" >

Introduction
============

**SugarCRM with Nexmo SMS** will allow SugarCRM users to send SMS to the respective reporting user (mentioned in “Report to” field of the logged in user), while creating a new opportunity or converting a lead into an opportunity with an amount more than the predefined amount.

Use case
========

1.  Sales Executive adds a new opportunity or qualifies a lead into an opportunity, and adds the expected budget amount to that opportunity, the app will send an SMS to the respective Sales Manager if the opportunity budget value is above the threshold amount.

    SMS that will be sent to the Sales Manager: **“A new opportunity &lt;&lt;Title&gt;&gt; for &lt;&lt;Account&gt;&gt; with probable value &lt;Budget value&gt; has been added.”**

2.  Sales Executive updates the budget amount of any opportunity, the app will send an SMS to the respective Sales Manager if the opportunity budget value is above the threshold amount.

    SMS that will be sent to the Sales Manager: **“An opportunity &lt;&lt;Title&gt;&gt; for &lt;&lt;Account&gt;&gt; has been updated with probable value &lt; Budget value&gt;.”**

Prerequisites 
==============

-   SugarCRM user with administrative privileges.

-   Nexmo subscription and corresponding Nexmo API keys (Keys and Secret). To access the API keys, see appendix section.

-   Internet connectivity.

Features 
=========

-   Allows users to define the threshold value.

-   Sends SMS to the user when the budget value of the opportunity is more than the threshold value, while:

    -   creating a new opportunity,

    -   updating the existing opportunity, or

    -   converting a lead into an opportunity.

-   Enable and disable SMS functionality

Steps to install SugarCRM with Nexmo SMS app
============================================ 

1.  Visit the target Git repository using the [ URL ] (https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS).

2.  Click on **Download ZIP** as shown in the below image:
    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image3.png" width="600">

3.  Extract ZIP file.

4.  Login with the admin user on SugarCRM.

5.  Navigate to the **Admin** section as shown in the image below:

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image4.png" width="600">

6.  Click on the **Module Loader** in the **Developer Tools** section.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image5.png" width="600">

7.  Click on **Choose File** and upload the App’s zip file from the **Package** folder of extracted repository.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image6.png" width="600">

8.  Click on **Install** and then click on **Commit** option.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image7.png" width="600">

9.  It will start installing the package.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image8.png" width="600">

10. On the top right, click on user’s Avatar and select the **Admin** option.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image4.png" width="600">

11. You can see a new section at the bottom as **Nexmo SMS settings**.

12. Click on **Configuration Settings.**

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image9.png" width="600">

13. On configuration settings page, provide your Nexmo API keys (Key and Secret) and the threshold amount.

    <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image10.png" width="600">

14. Enable SMS capability in your platform by checking the **Enable SMS** checkbox.

15. Click on **Save**.

> SugarCRM with Nexmo SMS’s installation and configuration is done.

<span id="_Toc432770621" class="anchor"></span>

Steps to use SugarCRM with Nexmo SMS app
========================================

User will receive SMS when an opportunity is created or a lead is converted into an opportunity.

## A.  When creating an opportunity: ##

<!-- -->

1.  Navigate to the opportunity from top menu and click on the create button.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image11.png" width="600">

2.  Type opportunity name and other details, and click on save.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image12.png" width="600">

3.  This opportunity will be shown in the opportunity list. Click on it.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image13.png" width="600">

4.  Click on **Edit** and scroll down to add revenue line items and provide relevant details.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image14.png" width="600">

5.  Click on **Save** button.

6.  Make sure your profile’s “Reports to” field is not empty as the app sends SMS to the user in your “Reports to” field.

7.  Your “Reports to” field’s user will get an SMS in the following format.

	Sales Executive adds a new opportunity or qualifies a lead into an opportunity:

	“**A new opportunity &lt;&lt; *Opportunity name* &gt;&gt; for &lt;&lt;*Account*&gt;&gt; with probable value &lt;&lt;*Budget value*&gt; has been added**.”

	Sales Executive updates an existing opportunity:

	“**An opportunity &lt;&lt; *Opportunity name* &gt;&gt; for &lt;&lt;*Account*&gt;&gt; has been updated with probable value &lt;&lt;*Budget value*&gt;**.”

<!-- -->

## B.  When converting a lead into an opportunity.##


1.  Click on the lead you want to convert.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image15.png" width="600">

2.  Click on **Edit** &gt;&gt; **Convert**.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image16.png" width="600">

3.  Provide your associated contact, account and opportunity details and click on **Save and Convert** button

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image17.png" width="600">

4.  This opportunity will be shown in the opportunity list. Click on it.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image13.png" width="600">

5.  Click on edit and scroll down to add revenue line items and provide relevant details.

	<img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image14.png" width="600">

6.  Click on **Save** button.

7.  Make sure your profile’s “Reports to” field is not empty as the app sends SMS to the user in your “Reports to” field.

8.  Your “Reports to” field’s user will get an SMS in the following format:

	“**A new opportunity &lt;&lt;*Opportunity name*&gt;&gt; for &lt;&lt;*Account*&gt;&gt; with probable value &lt;&lt;*Budget value*&gt; has been added**.”

<span id="_Toc432770622" class="anchor"></span>

Appendix
========

<span id="_Toc432770623" class="anchor"><span id="_Toc436392225" class="anchor"></span></span>Nexmo API Keys
------------------------------------------------------------------------------------------------------------

-   To access the Nexmo keys, go to <https://www.nexmo.com/> and sign-in.

-   In the top right corner, click on “**Api Settings**”.

-   Key and Secret will display in the top bar as shown in the below image:

> <img src="https://github.com/AdvaiyaLabs/SugarCRM-with-Nexmo-SMS/blob/master/docs/image18.png" width="600">

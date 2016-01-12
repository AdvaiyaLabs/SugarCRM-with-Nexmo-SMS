![](./media/image1.png)

*“An app to send SMS when an opportunity is added or a lead is converted into an opportunity”*

![](./media/image2.png)

Introduction
============

**SugarCRM with Nexmo SMS** will allow SugarCRM users to send SMS to the respective reporting user (mentioned in “Report to” field of the logged in user), while creating a new opportunity or converting a lead into an opportunity with an amount more than the predefined amount.

Use case
========

1.  Sales Executive adds a new opportunity or qualifies a lead into an opportunity, and adds the expected budget amount to that opportunity, the app will send an SMS to the respective Sales Manager if the opportunity budget value is above the threshold amount.

    SMS that will be sent to the Sales Manager: **“A new opportunity &lt;&lt;Title&gt;&gt; for &lt;&lt;Account&gt;&gt; with probable value &lt;Budget value&gt; has been added.”**

2.  Sales Executive updates the budget amount of any opportunity, the app will send an SMS to the respective Sales Manager if the opportunity budget value is above the threshold amount.

    SMS that will be sent to the Sales Manager: **“An opportunity &lt;&lt;Title&gt;&gt; for &lt;&lt;Account name&gt;&gt; has been updated with probable value &lt; Budget value&gt;.” **

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

Steps to install SugarCRM with Nexmo SMS
========================================

1.  Visit the target Git repository using the URL &lt;Nexmo App Github URL&gt;.

2.  Click on **Download ZIP** as shown in the below image:
    ![](./media/image3.png)

3.  Extract ZIP file.

4.  Login with the admin user on SugarCRM.

5.  Navigate to the **Admin** section as shown in the image below:

    ![](./media/image4.png)

6.  Click on the **Module Loader** in the **Developer Tools** section.

    ![](./media/image5.png)

7.  Click on **Choose File** and upload the module’s zip file.

    ![](./media/image6.png)

8.  Click on **Instal**l and then click on **Commit** option.

    ![](./media/image7.png)

9.  It will start installing the package.

    ![](./media/image8.png)

10. On the top right, click on user’s Avatar and select the **Admin** option.

    ![](./media/image4.png)

11. You can see a new section at the bottom as **Nexmo SMS settings**.

12. Click on **Configuration Settings.**

    ![](./media/image9.png)

13. On configuration settings page, provide your Nexmo API keys (Key and Secret) and the threshold amount.

    ![](./media/image10.png)

14. Enable SMS capability in your platform by checking the **Enable SMS** checkbox.

15. Click on **Save**.

> SugarCRM with Nexmo SMS’s installation and configuration is done.

<span id="_Toc432770621" class="anchor"></span>

Steps to use SugarCRM with Nexmo SMS
====================================

User will receive SMS when an opportunity is created or a lead is converted into an opportunity.

1.  When creating an opportunity:

<!-- -->

1.  Navigate to the opportunity from top menu and click on the create button.

    ![](./media/image11.png)

2.  Type opportunity name and other details, and click on save.

    ![](./media/image12.png)

3.  This opportunity will be shown in the opportunity list. Click on it.

    ![](./media/image13.png)

4.  Click on **Edit** and scroll down to add revenue line items and provide relevant details.

    ![](./media/image14.png)

5.  Click on **Save** button.

6.  Make sure your profile’s “Reports to” field is not empty as the app sends SMS to the user in your “Reports to” field.

7.  Your “Reports to” field’s user will get an SMS in the following format.

    Sales Executive adds a new opportunity or qualifies a lead into an opportunity:

    “**A new opportunity &lt;&lt; *Opportunity name* &gt;&gt; for &lt;&lt;*Account*&gt;&gt; with probable value &lt;&lt;*Budget value*&gt; has been added**.”

    Sales Executive updates an existing opportunity:

    “**An opportunity &lt;&lt; *Opportunity name* &gt;&gt; for &lt;&lt;*Account*&gt;&gt; has been updated with probable value &lt;&lt;*Budget value*&gt;**.”

<!-- -->

1.  When converting a lead into an opportunity.

<!-- -->

1.  Click on the lead you want to convert.

> ![](./media/image15.png)

1.  Click on **Edit** &gt;&gt; **Convert**.

    ![](./media/image16.png)

2.  Provide your associated contact, account and opportunity details and click on **Save and Convert** button

    ![](./media/image17.png)

<!-- -->

1.  This opportunity will be shown in the opportunity list. Click on it.

    ![](./media/image13.png)

2.  Click on edit and scroll down to add revenue line items and provide relevant details.

    ![](./media/image14.png)

3.  Click on **Save** button.

4.  Make sure your profile’s “Reports to” field is not empty as the app sends SMS to the user in your “Reports to” field.

5.  Your “Reports to” field’s user will get an SMS in the following format:

    “**A new opportunity &lt;&lt;*Opportunity name*&gt;&gt; for &lt;&lt;*Account*&gt;&gt; with probable value &lt;&lt;*Budget value*&gt; has been added**.”

<span id="_Toc432770622" class="anchor"></span>

Appendix
========

<span id="_Toc432770623" class="anchor"><span id="_Toc436392225" class="anchor"></span></span>Nexmo API Keys
------------------------------------------------------------------------------------------------------------

-   To access the Nexmo keys, go to <https://www.nexmo.com/> and sign-in.

-   In the top right corner, click on “**Api Settings**”.

-   Key and Secret will display in the top bar as shown in the below image:

> ![](./media/image18.png)

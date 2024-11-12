.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

.. _what-it-does:

What does it do?
================

The extension provides a button in the :ref:`TYPO3 Admin Panel
<typo3/cms-adminpanel:introduction>` to jump directly from the frontend page to the
corresponding backend form. This eliminates the need to click through the page
tree to edit a page.

The user's access rights are taken into account - so if they do not have
permission to edit a page, the :guilabel:`Edit` section is not available.

.. note::
   With TYPO3 v12.0 this feature was added to the admin panel directly. So
   there is no need for a v12 compatible version of this extension:
   :ref:`changelog:feature-97326`


Screenshots
===========

.. figure:: /Images/AdminPanel.png
   :alt: Admin Panel with the "Edit page in backend" button

   Admin Panel with the "Edit page in backend" button


Credits
=======

Special thanks go to the maintainers of the `Frontend editing extension (feedit)`_
where this function was taken from.


.. _Frontend editing extension (feedit): https://extensions.typo3.org/extension/feedit

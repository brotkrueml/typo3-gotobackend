.. include:: /Includes.rst.txt

.. _configuration:

=============
Configuration
=============

Target group: **Integrators**

In order for non-admin users to be able to see the
:guilabel:`Edit page in backend` button in the Admin Panel, this functionality
must be enabled in the corresponding UserTS:

.. code-block:: typoscript

   admPanel {
      enable {
         ext-gotobackend = 1
      }
   }

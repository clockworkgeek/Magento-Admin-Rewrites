Admin Rewrites allows you to enable URL rewriting for Magento's admin if the server supports it.

This means URLs that look like this:

    http://www.example.com/index.php/admin/index/index/

Can now look like this instead:

    http://www.example.com/admin/

**Beware!** Incorrect use could lock you out of admin and left unable to reverse the setting.
Should this happen you can still reach the Connect Manager by typing it's address directly:

    http://www.example.com/downloader/

To install, get your extension key from [the Connect Marketplace](http://www.magentocommerce.com/magento-connect/admin-rewrites.html).  
If you wish to edit this code then copy these files to an installed Magento directory, the package XML file is included so it will be available from _System > Magento Connect > Package Extensions > Load Local Package_.
You can then update and re-package as necessary.

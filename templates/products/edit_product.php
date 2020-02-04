<?php
    /**
     * Render Function for updating product in edit page
     * @return void.
     */
    function knawatproduct_metabox(){
?>
        <dev id="knawatproduct-metabox-content">
            <strong>Update Knawat Product</strong>
            <p>Warning: any changes made to the product will be overwritten</p>
            <a class="button button-primary button-large" id="knawat-update">Update</a>
            <script>
                jQuery("#knawat-update").click(function (e) {
                    var x = window.location.href;
                    x += '&knawat-update=true';
                    document.getElementById('knawat-update').setAttribute('href', x);
                });
            </script>
        </dev>
<?php
        if (isset($_GET['knawat-update']) && $_GET['knawat-update'] == true){
            Knawat_Dropshipping_Woocommerce_Common:: knawat_dropshipwc_before_single_product();
        }
    }
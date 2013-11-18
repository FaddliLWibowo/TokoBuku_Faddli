<footer>
    <hr>
    <div class="row well no_margin_left">

        <div class="span3">
            <h4>Information</h4>
            <ul>
                <li><a href="<?php echo base_url() ?>index.php/pages/read/about">About</a></li>
                <li><a href="<?php echo base_url() ?>index.php/products">Products</a></li>
                <li><a href="<?php echo base_url() ?>index.php/pages/read/how-to-shop">How To Shop</a></li>

            </ul>
        </div>
        <div class="span3">
            <h4>Customer Service</h4>
            <ul>
                <li><a href="<?php echo base_url() ?>index.php/pages/read/contact">Contact us</a></li>

            </ul>
        </div>
		<div class="span3">
            <h4>Follow us</h4>
            <ul>
                <li><a href="https://twitter.com">Twitter</a></li>
				<li><a href="https://www.facebook.com/FaddliLindraWibowo?ref=tn_tnmn">Facebook</a></li>
            </ul>
        </div>
        <div class="span2">
            <h4>My Account</h4>
            <ul>
                <?php if ($this->session->userdata('id')): ?>
                    <li><a href="<?php echo base_url() ?>index.php/orders/history">Order History</a></li>
                    <li> <a href="<?php echo base_url() ?>index.php/users/profile">Profile</a> </li> 
                    <li><a href="<?php echo base_url() ?>index.php/users/logout">Logout</a> </li>
                <?php else: ?>

                    <li><a href="<?php echo base_url() ?>index.php/users/register">Register</a> </li>
                    <li><a href="<?php echo base_url() ?>index.php/users/login">Login</a> </li>

                <?php endif; ?>
            </ul>
        </div>

    </div>
    <p class="pull-right">
        Developed by : <a href="http://ellislab.com/codeigniter" rel="dofollow"/>Codeigniter</a>

    </p>
</footer>

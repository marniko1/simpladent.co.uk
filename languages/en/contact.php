    ﻿    <div id="page" class="contacts">
        <div class="main_img" style="background-image: url('img/contact/simpl2.jpg')
        "></div>
        <div class="in">
            <div class="section main_section" id="contactsSection_1">
                <div class="main_block">
                    <h1>Contact</h1>
                    <div class="article">
                        <h2>Contact us by Phone:</h2>
                        <p>+447447099966</p> 
                        <h2>Email:</h2>
                        <p><a href="mailto:info@simpladent.ch">info@simpladent.co.uk</a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="section" id="contactsSection_2">
                <div class="article">
                    <h2>Our Offices:</h2>
                    <!--<p>The administration of each clinic partner allows the placement of patients from other cities and countries.</p>-->
                </div>
                <div class="clear"></div>
                <div class="contactsMapBlock">
                    <script type="text/javascript">
                        var addressList = { 4: ['<p>Dr. Betty Kabir Oerlemans<br />London</p><p>England</p><strong><a href="javascript: openContact(\'UK\')">KONTAKT</a></strong>' ]              }
                    </script>
                        <div id="cities_list">
                            <!--  в аттрибут data-coords записываются координаты с google maps -->
                            <ul>
										<!--<a href="/?page=clinic&c=osa_simpladent&i=10">-->
											<li data-clinic="osa_simpladent" data-id="4" data-coords="47.400000, 27.0033098">London</li>	
										<!--</a>-->										
                             </ul>
                        </div>					
					<div class="contactssection_2_left">
						<!--<img src="img/contact/petra_mehrlein.png" height="300" alt="Frau Petra Mehrlein" />
						<br />
						<p><strong>Frau Petra Mehrlein</strong></p>
						<p>Koordination für Deutschland, Schweiz und Luxemburg</p>
						<br />
						<p><strong>Mobil Tel.:</strong> +015228748223</p>-->
					</div>						
					
					
					
                    <div id="mapBlock">
                        <div id="map"></div>
                    </div>

                                        <div class="clear"></div>
                    <div class="clearfix" id="addresses_list"></div>
                    <div class="clear"></div>
                </div>
				
					<br />
					<br />
					<div class="contactworldmap" style="">
						<p style="width:100%; float:right;">See all clinics on the <a href="http://simpladent-implant.solutions/?page=map&i=5" target="_blank">world map</a></p>
					</div>				
					<br />						
					<br />				
				
                    <div id="contactForm" title="Simpladent">
                        <form method="post" id="contact">
                            <table>
                                <tr>
                                    <td><?php echo $elements->contact->name ; ?></td>
                                    <td><input type="text" name="name" /> </td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->contact->number ; ?></td>
                                    <td><input type="text" name="phone" /></td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->contact->mail ; ?></td>
                                    <td><input type="text" name="mail" /></td>
                                </tr>
                                <tr>
                                    <td><?php echo $elements->appointments->comment ; ?></td>
                                    <td><textarea name="comment" style="width: 203px;"></textarea></td>
                                </tr>
                                <tr>
                                    <input type="text" name="customerID" id="customerID"/>
                                    <input type="hidden" name="city" id="city" value="none"/>
                                    <td colspan="2" align="right"><input type="submit" value="<?php echo $elements->contact->send ; ?>" /></td>
                                </tr>
                            </table>
                            
                        </form>
                    </div>

            </div>
        </div>


    </div>
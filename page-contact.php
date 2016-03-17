<?php
/* Template Name: Contact Template */

get_header(); ?>

    <section class="contact">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <p class="contactIntro">Als u nog eventuele vragen heeft kunt u hieronder contact met ons opnemen.<br>
                        Wij zullen zo spoedig mogelijk uw vraag beantwoorden.</p>
                </div>
            </div>

            <form action="mailto:Emailadresshierinvoeren" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mailicon">


                            <img class="mail" src="<?php bloginfo('template_directory'); ?>/images/Mailicon.png" width="350" height="220" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="textarea">
             	<textarea class="textzone" name="opmerkingen">
    		    </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <input class="verzenden" type="submit" value="Verzenden" />
                            <input class="opnieuw" type="reset" value="Opnieuw" />
                        </p>
                    </div>
                </div>

            </form>

        </div><!--Container Sluit-->
    </section>


<?php get_footer(); ?>
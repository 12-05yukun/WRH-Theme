<?php 
/* Template Name: E-Mail Signatur */
?>

<style>
  .weglot-dropdown {
    display: none;
  }
	.golden {
		color: #FFF;
	}
</style>
<html>
  <body>
    <table style="width: 600px">
      <tr>
        <td>
          <table
            cellpadding="0"
            cellspacing="0"
            align="left"
            style="
              background-color: #ffff;
              font-family: Arial, Helvetica, sans-serif;
              width: 600px;
              text-align: left;
              border: 0px;
              margin: 0;
            "
          >
            <tr>
              <td>
                <table
                  align="left"
                  cellspacing="0"
                  style="width: 600px; border: 0px"
                >
                  <tr>
                    <td
                      style="
                        font-size: 13px;
                        color: #707070;
                        padding-bottom: 50px;
                        font-family: Arial, Helvetica, sans-serif;
                      "
                    >
                      <?php the_field('kontaktdaten');?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table
            cellpadding="0"
            cellspacing="0"
            align="left"
            style="
              background-color: #eee;
              font-family: Arial, Helvetica, sans-serif;
              width: 600px;
              text-align: center;
              border: 0px;
              marign: 0;
            "
          >
            <tr>
              <td>
                <?php if(get_field('aktion_aktiv')):?>

                <table
                  align="left"
                  cellspacing="0"
                  cellpadding="0"
                  style="width: 600px; border: 0px"
                >
                  <tr style="background-color: #eee; padding: 0; margin: 0">
                    <td style="width: 50%; padding: 0">
                      <img
                        style="width: 300px; height: auto"
                        src="<?php  echo wp_get_attachment_image_src( get_field('aktion_bild'),'medium' )[0];?> "
                        alt="Bild"
                      />
                    </td>

                    <td
                      style="
                        background-color: #eee;
                        font-family: Arial, Helvetica, sans-serif;
                        color: #707070;
                        width: 50%;
                        font-size: 12px;
                        padding: 16px;
                      "
                    >
                      <?php the_field('aktion_text');?>
                    </td>
                    <td></td>
                  </tr>
                </table>
                <?php endif;?>
              </td>
            </tr>
          </table>
          <table
            align="left"
            style="
              background-color: #a8925e;
              font-family: Arial, Helvetica, sans-serif;
              width: 600px;
              text-align: center;
              border: 0px;
              margin: 0;
            "
          >
            <tr>
              <td>
                <table
                  align="left"
                  cellspacing="0"
                  style="width: 100%; border: 0px"
                >
                  <tr style="background-color: #a8925e; color: #fff">
                    <td
                      style="
                        vertical-align: top;
                        text-align: center;
                        padding: 16px;
                        width: 30%;
                      "
                    >
                      <img
                        style="width: 100px; height: auto"
                        src="<?php the_field('logo');?> "
                        alt="Logo"
                      />
                    </td>
                    <td></td>

                    <td
                      style="
                        font-family: Arial, Helvetica, sans-serif;
                        color: #fff;
                        width: 70%;
                        font-size: 12px;
                        padding: 16px;
                      "
                    >
                      <h3
                        style="
                          font-family: Georgia, 'Times New Roman', Times, serif;
                          margin: 0;
                          font-size: 14px;
                          margin-bottom: 8px;
                        "
                      >
                        <?php the_field('firmierung');?>
                      </h3>
                      <table
														 class="golden"
                        style="
                          background-color: #a8925e;
                          font-size: 12px;
                          color: #fff;
                          vertical-align: top;
                          border: 0;
                        "
                      >
                        <tr>
                          <td
                            style="
                              vertical-align: top;
                              padding-right: 8px;
                              font-family: Arial, Helvetica, sans-serif;
                            "
                          >
                            <?php the_field('first_column');?>
                            <?php if(get_field('icons')):foreach(get_field('icons') as $icon):?>
                            <a
                              href="<?php echo $icon['link'];?>"
                              target="_blank"
                              ><img src="<?php echo $icon['icon'];?>"
                            /></a>
                            <?php endforeach;endif;?>
                          </td>
                          <td
                            style="
                              vertical-align: top;
                              padding-left: 8px;
                              font-family: Arial, Helvetica, sans-serif;
                            "
                          >
                            <?php the_field('second_column');?>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>

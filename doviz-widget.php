<?php
class Jetdoviz_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
                    'jetdoviz_widget',
                    esc_html__( 'Jet - Döviz Kurları', 'jet-currency' ),
                    array( 'description' => esc_html__( 'Jet Döviz Kurları', 'jet-currency' ), ) // Args
                );
	}

	private $widget_fields = array(
    
            array(
                'label' => 'USD - ABD Doları',
                'id' => 'USD',
                'type' => 'checkbox',
                'default' => true
            ),
            array(
                'label' => 'EUR - Euro',
                'id' => 'EUR',
                'type' => 'checkbox',
                'default' => true
            ),
            array(
                'label' => 'GBP - İngiliz Sterlini',
                'id' => 'GBP',
                'type' => 'checkbox',
                'default' => true
            ),
            array(
                'label' => 'CHF - İsviçre Frangı',
                'id' => 'CHF',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'CAD - Kanada Doları',
                'id' => 'CAD',
                'type' => 'checkbox',
                'default' => true
            ),
            array(
                'label' => 'RUB - Rus Rublesi',
                'id' => 'RUB',
                'type' => 'checkbox',
                'default' => true
            ),
            array(
                'label' => 'AED - BAE Dirhemi',
                'id' => 'AED',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'AUD - Avustralya Doları',
                'id' => 'AUD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'DKK - Danimarka Kronu',
                'id' => 'DKK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'SEK - İsveç Kronu',
                'id' => 'SEK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'NOK - Norveç Kronu',
                'id' => 'NOK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'JPY - 100 Japon Yeni',
                'id' => 'JPY',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'KWD - Kuveyt Dinarı',
                'id' => 'KWD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'ZAR - Güney Afrika Randı',
                'id' => 'ZAR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'BHD - Bahreyn Dinarı',
                'id' => 'BHD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'LYD - Libya Dinarı',
                'id' => 'LYD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'SAR - Suudi Arabistan Riyali',
                'id' => 'SAR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'IQD - Irak Dinarı',
                'id' => 'IQD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'ILS - İsrail Şekeli',
                'id' => 'ILS',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'IRR - İran Riyali',
                'id' => 'IRR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'INR - Hindistan Rupisi',
                'id' => 'INR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'MXN - Meksika Pesosu',
                'id' => 'MXN',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'HUF - Macar Forinti',
                'id' => 'HUF',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'NZD - Yeni Zelanda Doları',
                'id' => 'NZD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'BRL - Brezilya Reali',
                'id' => 'BRL',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'IDR - Endonezya Rupisi',
                'id' => 'IDR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'CSK - Çek Korunası',
                'id' => 'CSK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'PLN - Polonya Zlotisi',
                'id' => 'PLN',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'RON - Romanya Leyi',
                'id' => 'RON',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'CNY - Çin Yuanı',
                'id' => 'CNY',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'ARS - Arjantin Pesosu',
                'id' => 'ARS',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'ALL - Arnavutluk Leki',
                'id' => 'ALL',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'AZN - Azerbaycan Manatı',
                'id' => 'AZN',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'BAM - Bosna-Hersek Markı',
                'id' => 'BAM',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'CLP - Şili Pesosu',
                'id' => 'CLP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'COP - Kolombiya Pesosu',
                'id' => 'COP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'CRC - Kostarika Kolonu',
                'id' => 'CRC',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'DZD - Cezayir Dinarı',
                'id' => 'DZD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'EGP - Mısır Lirası',
                'id' => 'EGP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'HKD - Hong Kong Doları',
                'id' => 'HKD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'HRK - Hırvat Kunası',
                'id' => 'HRK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'ISK - İzlanda Kronası',
                'id' => 'ISK',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'JOD - Ürdün Dinarı',
                'id' => 'JOD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'KRW - Güney Kore Wonu',
                'id' => 'KRW',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'KZT - Kazak Tengesi',
                'id' => 'KZT',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'LBP - Lübnan Lirası',
                'id' => 'LBP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'LKR - Sri Lanka Rupisi',
                'id' => 'LKR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'MAD - Fas Dirhemi',
                'id' => 'MAD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'MDL - Moldovya Leusu',
                'id' => 'MDL',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'MKD - Makedon Dinarı',
                'id' => 'MKD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'MYR - Malezya Ringgiti',
                'id' => 'MYR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'OMR - Umman Riyali',
                'id' => 'OMR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'PEN - Peru İnti',
                'id' => 'PEN',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'PHP - Filipinler Pesosu',
                'id' => 'PHP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'PKR - Pakistan Rupisi',
                'id' => 'PKR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'QAR - Katar Riyali',
                'id' => 'QAR',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'RSD - Sırbistan Dinarı',
                'id' => 'RSD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'SGD - Singapur Doları',
                'id' => 'SGD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'SYP - Suriye Lirası',
                'id' => 'SYP',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'THB - Tayland Bahtı',
                'id' => 'THB',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'TWD - Yeni Tayvan Doları',
                'id' => 'TWD',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'UAH - Ukrayna Grivnası',
                'id' => 'UAH',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'UYU - Uruguay Pesosu',
                'id' => 'UYU',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'GEL - Gürcistan Larisi',
                'id' => 'GEL',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'TND - Tunus Dinarı',
                'id' => 'TND',
                'type' => 'checkbox',
            ),
            array(
                'label' => 'BGN - Bulgar Levası',
                'id' => 'BGN',
                'type' => 'checkbox',
            ),
            
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
        
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
                }
    
                $client = curl_init();
                curl_setopt($client, CURLOPT_REFERER, "https://finans.truncgil.com/today.json");
                curl_setopt($client, CURLOPT_URL, "https://finans.truncgil.com/today.json");
                curl_setopt($client, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.415");
                curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                $data = curl_exec($client);
                $currency = json_decode($data, true);

                ?>

                    <table class="jet-currency">
                        <thead>
                            <tr>
                                <th><?php _e('Döviz Kuru', 'jet-currency') ?></th>
                                <th><?php _e('Fiyat', 'jet-currency') ?></th>
                                <th><?php _e('Değişim', 'jet-currency') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ( $i = 1; $i <= 66; $i++ ) {
                                    $paralar = array_keys($instance);
                                    if ( $instance[$paralar[$i]] == 1 ) {
                                        echo '<tr>';
                                        echo '<td class="price"><img src="'.plugins_url('img/'.array_keys($currency)[$i].'.png', __FILE__).'" alt="'.array_keys($currency)[$i].'" width="20" height="20"><span>' . array_keys($currency)[$i] . '</span></td>';
                                        echo '<td>' . array_values($currency)[$i]['Satış'] . '</td>';
                                        echo '<td>' . array_values($currency)[$i]['Değişim'] . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                <?php



		
		echo $args['after_widget'];
        }
	// Back-end widget fields
	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'jet-currency' );
			switch ( $widget_field['type'] ) {
                                case 'checkbox':
                                        $output .= '<p>';
                                        $output .= '<input class="checkbox" type="checkbox" '.checked( $widget_value, true, false ).' id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" value="1">';
                                        $output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'domtest' ).'</label>';
                                        $output .= '</p>';
                                        break;
                    
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'jet-currency' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'jet-currency' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Başlık:', 'jet-currency' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_Jetdoviz_widget() {
	register_widget( 'Jetdoviz_Widget' );
}
add_action( 'widgets_init', 'register_Jetdoviz_widget' );

?>
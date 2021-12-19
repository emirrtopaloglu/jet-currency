<?php
// Adds widget: Jetkripto
class Jetkripto_Widget extends WP_Widget {

	// Register widget with WordPress
	function __construct() {
		parent::__construct(
                    'jetkripto_widget',
                    esc_html__( 'Jet - Kripto Paralar', 'jet-currency' ),
                    array( 'description' => esc_html__( 'Jet Kripto Para Birimleri', 'jet-currency' ), ) // Args
                );
	}

	// Widget fields
	private $widget_fields = array(
    
            array(
                'label' => 'Kaç Tane Gösterilsin?',
                'id' => 'crypto_count',
                'default' => '10',
                'type' => 'number',
            )
	);

	// Frontend display of widget
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
        
                // Output widget title
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
                }
        
                $client = curl_init();
                curl_setopt($client, CURLOPT_REFERER, "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false");
                curl_setopt($client, CURLOPT_URL, "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false");
                curl_setopt($client, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.415");
                curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                $data = curl_exec($client);
                $currency = json_decode($data, true);

                ?>

                <table class="jet-crypto">
                        <thead>
                            <tr>
                                <th><?php _e('Kripto Para', 'jet-currency') ?></th>
                                <th><?php _e('Fiyat', 'jet-currency') ?></th>
                                <th><?php _e('Değişim', 'jet-currency') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ( $i = 0; $i < $instance['crypto_count']; $i++ ) {
                                if ( $currency[$i]['current_price'] > 0.001 ) {
                                    $price = number_format($currency[$i]['current_price'], 2);
                                } else {
                                    $price = number_format($currency[$i]['current_price'], 6);
                                }
                                echo '<tr>';
                                echo '<td class="price"><img src="' . $currency[$i]['image'] . '" alt="' . $currency[$i]['name'] . '" width="20" height="20"><span>' . $currency[$i]['name'] . '</span></td>';
                                echo '<td>' . $price . '</td>';
                                echo '<td>%' . number_format($currency[$i]['price_change_percentage_24h'], 2) . '</td>';
                                echo '</tr>';
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

	// Sanitize widget form values as they are saved
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

function register_Jetkripto_widget() {
	register_widget( 'Jetkripto_Widget' );
}
add_action( 'widgets_init', 'register_Jetkripto_widget' );
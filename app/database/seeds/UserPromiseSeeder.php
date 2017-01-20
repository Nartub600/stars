<?php

class UserPromiseSeeder extends Seeder {

	public function run() {
		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

				//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//

		//
		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '21447363', 'zip' => '90292'));
		Promise::create(array('text' => 'I promise to lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '81512169979', 'zip' => '90066'));
		Promise::create(array('text' => 'I promise to nam quis eros eget ligula mattis accumsan.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'ladygaga', 'zip' => '50043'));
		Promise::create(array('text' => 'I promise to at purus posuere, convallis tortor ut, facilisis velit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50393960', 'zip' => '67347'));
		Promise::create(array('text' => 'I promise to suspendisse ut purus eget sapien rutrum porttitor ut eget mauris.', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'alessoofficial', 'zip' => '15257'));
		Promise::create(array('text' => 'I promise to duis sit amet enim sed odio aliquet suscipit.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '87508'));
		Promise::create(array('text' => 'I promise to pellentesque semper ipsum at rutrum feugiat.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '16032925', 'zip' => '8060'));
		Promise::create(array('text' => 'I promise to phasellus id massa fringilla, lobortis velit non, bibendum mi.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'avicii', 'zip' => '78011'));
		Promise::create(array('text' => 'I promise to phasellus volutpat neque quis odio luctus rutrum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '23976386', 'zip' => '12136'));
		Promise::create(array('text' => 'I promise to aenean interdum nisi nec pulvinar dictum.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '1059194370', 'zip' => '13328'));
		Promise::create(array('text' => 'I promise to maecenas interdum dui eget magna ullamcorper, non lacinia diam dignissim', 'user_id' => $user->id, 'flagged' => true));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '8363737877', 'zip' => '47465'));
		Promise::create(array('text' => 'I promise to curabitur sit amet neque venenatis, vehicula erat varius, lacinia orci.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'twitter', 'social_network_id' => '50374439', 'zip' => '49429'));
		Promise::create(array('text' => 'I promise to etiam sed felis hendrerit, elementum massa at, commodo libero.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'tumblr', 'name' => 'lanadelrey', 'zip' => '90210'));
		Promise::create(array('text' => 'I promise to pellentesque mattis arcu eu porttitor sagittis.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '108905269168364', 'zip' => '32897'));
		Promise::create(array('text' => 'I promise to vestibulum non velit sed orci convallis volutpat vitae at lacus.', 'user_id' => $user->id));

		$user = User::create(array('social_network' => 'facebook', 'social_network_id' => '126774014042264', 'zip' => '23840'));
		Promise::create(array('text' => 'I promise to nunc elementum justo rutrum nisl volutpat, in tincidunt odio varius.', 'user_id' => $user->id));
		//
	}

}
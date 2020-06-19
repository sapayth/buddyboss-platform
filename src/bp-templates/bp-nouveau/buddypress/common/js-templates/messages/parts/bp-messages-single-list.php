<script type="text/html" id="tmpl-bp-messages-single-list">

	<# if ( data.message_from && 'group' === data.message_from ) { #>
	<div class="bp-single-message-wrap group-messages-highlight">
	<# } else { #>
	<div class="bp-single-message-wrap">
	<# } #>

		<div class="bp-avatar-wrap">
			<# if ( data.is_deleted ) { #>
				<img class="avatar" src="{{data.sender_avatar}}" alt="" />
			<# } else { #>
				<a href="{{data.sender_link}}" class="bp-user-avatar">
					<img class="avatar" src="{{data.sender_avatar}}" alt="" />
				</a>
			<# } #>
		</div>

		<div class="bp-single-message-content">
			<div class="message-metadata">
				<# if ( data.beforeMeta ) { #>
				<div class="bp-messages-hook before-message-meta">{{{data.beforeMeta}}}</div>
				<# } #>

				<# if ( data.is_deleted ) { #>
					<# if ( data.sender_is_you ) { #>
					<strong><?php _e( 'You', 'buddyboss' ); ?></strong>
					<# } else { #>
					<strong class="bp-user-deleted">{{data.sender_name}}</strong>
					<# } #>
				<# } else { #>
					<a href="{{data.sender_link}}" class="bp-user-link">
						<# if ( data.sender_is_you ) { #>
						<strong><?php _e( 'You', 'buddyboss' ); ?></strong>
						<# } else { #>
						<strong>{{data.sender_name}}</strong>
						<# } #>
					</a>
				<# } #>


				<time datetime="{{data.date.toISOString()}}" class="activity">{{data.display_date}}</time>

				<# if ( data.afterMeta ) { #>
				<div class="bp-messages-hook after-message-meta">{{{data.afterMeta}}}</div>
				<# } #>
			</div>

			<# if ( data.beforeContent ) { #>
			<div class="bp-messages-hook before-message-content">{{{data.beforeContent}}}</div>
			<# } #>

			<div class="bp-message-content-wrap">{{{data.content}}}</div>

			<# if ( data.media ) { #>
			<div class="bb-activity-media-wrap bb-media-length-{{data.media.length}}">
				<# for ( i in data.media ) { #>
				<div class="bb-activity-media-elem">
					<a class="bb-open-media-theatre bb-photo-cover-wrap"
					   data-id="{{data.media[i].id}}"
					   data-activity-id="{{data.media[i].activity_id}}"
					   data-attachment-full="{{data.media[i].full}}"
					   data-privacy="{{data.media[i].privacy}}"
					   href="#">
						<img src="{{data.media[i].thumbnail}}" alt="{{data.media[i].title}}"/>
					</a>
				</div>
				<# } #>
			</div>
			<# } #>

			<# if ( data.document ) { #>
			<div class="bb-activity-media-wrap bb-media-length-{{data.document.length}}">
				<# for ( i in data.document ) { #>
					<div class="bb-activity-media-elem document-activity " data-id="">
						<div class="document-description-wrap">
							<a href="{{data.document[i].url}}" class="entry-img" data-id="{{data.document[i].id}}" data-activity-id="{{data.document[i].activity_id}}">
								<i class="{{data.document[i].svg_icon}}" ></i>
							</a>
							<a href="{{data.document[i].url}}"
							   class="document-detail-wrap bb-open-document-theatre"
							   data-id="{{data.document[i].id}}"
							   data-activity-id="{{data.document[i].activity_id}}"
							   data-icon-class={{data.document[i].svg_icon}}"
							   data-attachment-id="{{data.document[i].attachment_id}}"
							   data-attachment-full=""
							   data-privacy="{{data.document[i].privacy}}"
							   data-extension="{{data.document[i].extension}}"
							   data-author="{{data.document[i].author}}"
							   data-preview="{{data.document[i].preview}}"
							   data-text-preview="{{data.document[i].text_preview}}"
							   data-mp3-preview="{{data.document[i].mp3_preview}}"
							   data-document-title="{{data.document[i].document_title}}"
							   data-mirror-text="{{data.document[i].mirror_text}}">
								<span class="document-title">{{data.document[i].title}}.{{data.document[i].extension}}</span>
								<span class="document-description">{{data.document[i].size}}</span>
								{{{data.document[i].extension_description}}}
								<span class="document-helper-text"> <span> — </span> <span class="document-helper-text-inner">{{data.document[i].download_text}}</span></span>
							</a>
						</div>
						<div class="document-action-wrap">
							<a href="#" class="document-action_collapse" data-balloon-pos="down" data-balloon="{{data.document[i].collapse}}"><i class="bb-icon-arrow-up document-icon-collapse"></i></a>
							<a href="{{data.document[i].url}}" class="document-action_download" data-balloon-pos="up" data-balloon="{{data.document[i].download}}">
								<i class="bb-icon-download"></i>
							</a>

							<a href="#" target="_blank" class="document-action_more" data-balloon-pos="up" data-balloon="{{data.document[i].more_action}}">
								<i class="bb-icon-menu-dots-v"></i>
							</a>
							<div class="document-action_list">
								<ul>
									<li class="copy_download_file_url">
										<a href="{{data.document[i].url}}">{{data.document[i].copy_download_link}}</a>
									</li>
								</ul>
							</div>
						</div>
						{{{data.document[i].msg_preview}}}
					</div>
				<# } #>
			</div>

			<# } #>

            <# if ( data.gif ) { #>
            <div class="activity-attached-gif-container">
                <div class="gif-image-container">
                    <div class="gif-player">
                        <video preload="auto" playsinline poster="{{data.gif.preview_url}}" loop muted playsinline>
                            <source src="{{data.gif.video_url}}" type="video/mp4">
                        </video>
                        <a href="#" class="gif-play-button">
                            <span class="bb-icon-play-thin"></span>
                        </a>
                        <span class="gif-icon"></span>
                    </div>
                </div>
            </div>
            <# } #>

			<# if ( data.afterContent ) { #>
			<div class="bp-messages-hook after-message-content">{{{data.afterContent}}}</div>
			<# } #>

			<# if ( data.group_text && data.message_from && 'group' === data.message_from ) { #>
					<div class="bb-group-message-info">{{{data.group_text}}}</div>
			<# } #>
		</div>
	</div>
</script>

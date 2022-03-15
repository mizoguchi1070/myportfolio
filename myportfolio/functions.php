<?php

function create_post_type() {
  $exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'works',  // カスタム投稿ID
    array(
      'label' => 'works',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします

/**
 * カスタム分類「イベント情報カテゴリー」を追加
 *
 * @return void
 */
function add_custom_taxonomy_event() {
	register_taxonomy(
		'works-cat', /* カテゴリーの識別スラッグ */
		'works', /* 対象の投稿タイプのスラッグ */
		array(
			'hierarchical'          => true,
			'update_count_callback' => '_update_post_term_count',
			'label'                 => 'works-category',
			'public'                => true,
			'show_ui'               => true,
			'show_in_rest'          => true,
		)
	);
}
add_action( 'init', 'add_custom_taxonomy_event', 0 );


/***
 * カスタム投稿タイプ「イベント情報」を追加
 *
 * @return void
 *
function add_post_type_event() {
	register_post_type(
		'event', /* カスタム投稿タイプのスラッグ *
		array(
			'labels'       => array(
				'name' => 'イベント情報',
			),
			'public'       => true,
			'has_archive'  => true,
			'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'add_post_type_event', 0 );


/**
 * カスタム分類「イベント情報カテゴリー」を追加
 *
 * @return void
 *
function add_custom_taxonomy_event() {
	register_taxonomy(
		'event-cat', /* カテゴリーの識別スラッグ *
		'event', /* 対象の投稿タイプのスラッグ *
		array(
			'hierarchical'          => true,
			'update_count_callback' => '_update_post_term_count',
			'label'                 => 'イベントカテゴリー',
			'public'                => true,
			'show_ui'               => true,
			'show_in_rest'          => true,
		)
	);
}
add_action( 'init', 'add_custom_taxonomy_event', 0 );
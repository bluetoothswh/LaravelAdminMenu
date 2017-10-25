<?php
return [
	//一级菜单
	'first'=>[
		        [
					'name'=>'控制面板',
					'page'=>'index',
					'icon'=>'<i class="m-menu__link-icon fa fa-tachometer"></i>',
			    ],
			    [
					'name'=>'网店常用设置',
					'page'=>'common',
					'icon'=>'<i class="m-menu__link-icon fa fa-cube"></i>',
			    ],
			    [
					'name'=>'商品管理',
					'page'=>'goods',
					'icon'=>'<i class="m-menu__link-icon flaticon-imac"></i>',
			    ],
			    [
					'name'=>'促销管理',
					'page'=>'promotion',
					'icon'=>'<i class="m-menu__link-icon fa fa-home"></i>',
			    ],
				[
					'name'=>'订单管理',
					'page'=>'order',
					'icon'=>'<i class="m-menu__link-icon flaticon-truck "></i>',
				],
		        [
					'name'=>'用户管理',
					'page'=>'user',
					'icon'=>'<i class="m-menu__link-icon fa fa-users"></i>',
			    ],
				[
					'name'=>'文章管理',
					'page'=>'article',
					'icon'=>'<i class="m-menu__link-icon fa fa-list-alt"></i>',
				],
				[
					'name'=>'供货商管理',
					'page'=>'supplier',
					'icon'=>'<i class="m-menu__link-icon fa fa-list-alt"></i>',
				],
				[
					'name'=>'权限管理',
					'page'=>'privi',
					'icon'=>'<i class="m-menu__link-icon fa fa-unlock"></i>',
				],
				[
					'name'=>'模板设置',
					'page'=>'template',
					'icon'=>'<i class="m-menu__link-icon fa fa-hashtag"></i>',
				],
				[
					'name'=>'商城系统配置',
					'page'=>'config',
					'icon'=>'<i class="m-menu__link-icon fa fa-cube"></i>',
				],
				[
					'name'=>'移动版本设置',
					'page'=>'mobile',
					'icon'=>'<i class="m-menu__link-icon fa fa-wifi"></i>',
				],
	],

	//二级菜单
	'second'=> [
					'common' =>[
									[
										'name'=>'自定义导航栏',
										'tag'=>'admin.nav.index',
										'url'=>url('admin/nav'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
									[
										'name'=>'整站图片管理',
										'tag'=>'admin.image.index',
										'url'=>url('admin/image'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'友情链接管理',
										'tag'=>'admin.link.index',
										'url'=>url('admin/link'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
					],
					'index' =>[

									[
										'name'=>'系统信息',
										'tag'=>'admin.system.index',
										'url'=>url('admin/index'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
					],
					'goods' =>[
									[
										'name'=>'商品列表',
										'tag'=>'admin.goods.index',
										'url'=>url('admin/goods'),
										'icon'=>'<i class="icon-present"></i>'
								    ],
								    [
										'name'=>'商品分类',
										'tag'=>'admin.category.index',
										'url'=>url('admin/category'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'商品品牌',
										'tag'=>'admin.brand.index',
										'url'=>url('admin/brand'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
									[
										'name'=>'商品类型管理',
										'tag'=>'admin.type.index',
										'url'=>url('admin/type'),
								    ],
								    [
										'name'=>'属性管理',
										'tag'=>'admin.attribute.index',
										'url'=>url('admin/attribute'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'商品规格',
										'tag'=>'admin.field.index',
										'url'=>url('admin/field'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'颜色属性管理',
										'tag'=>'admin.color.index',
										'url'=>url('admin/color'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'属性链货品管理',
										'tag'=>'admin.product.index',
										'url'=>url('admin/product'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'Excel导入导出',
										'tag'=>'admin.excel.index',
										'url'=>url('admin/excel'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'命令行批量添加商品',
										'tag'=>'admin.command.index',
										'url'=>url('admin/command'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'商品图片批量处理',
										'tag'=>'admin.goods.image',
										'url'=>url('admin/goods/image'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'标签管理',
										'tag'=>'admin.tag.index',
										'url'=>url('admin/tag'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
								    [
										'name'=>'商品回收站',
										'tag'=>'admin.cycle.index',
										'url'=>url('admin/cycle'),
										'icon'=>'<i class="fa fa-home"><i>'
								    ],
					],
					'promotion'=>[
									[
										'name'=>'礼品卡列表',
										'tag'=>'admin.card.index',
										'url'=>url('admin/card'),
										'icon'=>'',
									],
					],
					'order'=>[
										[
											'name'=>'订单列表',
											'tag'=>'admin.order.index',
											'url'=>url('admin/order'),
											'icon'=>'',

										],
										[
											'name'=>'添加订单',
											'tag'=>'admin.order.create',
											'url'=>url('admin/order/create'),
										],
										[
											'name'=>'订单日志',
											'tag'=>'admin.order.log',
											'url'=>url('admin/order/log'),
										],

										[
											'name'=>'发货单管理',
											'tag'=>'admin.express.index',
											'url'=>url('admin/express'),
										],

										[
											'name'=>'退货管理',
											'tag'=>'admin.return.index',
											'url'=>url('admin/return'),
										],
										[
											'name'=>'订单打印',
											'tag'=>'admin.order.print',
											'url'=>url('admin/order/print'),
										],
					],
					'user' =>[
								[
										'name'=>'用户列表',
										'tag'=>'admin.user.index',
										'url'=>url('admin/user'),
										'icon'=>'<i class="icon-present"></i>'
								],
							    [
									'name'=>'会员等级',
									'tag'=>'admin.user_rank.index',
									'url'=>url('admin/user_rank'),
									'icon'=>'<i class="fa fa-home"><i>'
							  ],
							  [
									'name'=>'充值和提现',
									'tag'=>'admin.account.index',
									'url'=>url('admin/account'),
									'icon'=>'<i class="fa fa-home"><i>'
							  ],
							  [
									'name'=>'会员留言',
									'tag'=>'admin.message.index',
									'url'=>url('admin/message'),
									'icon'=>'<i class="fa fa-home"><i>'
							  ],
							  [
									'name'=>'短消息管理',
									'tag'=>'admin.sms.index',
									'url'=>url('admin/sms'),
									'icon'=>'<i class="fa fa-home"><i>'
							  ],
							  [
									'name'=>'演示账号管理',
									'tag'=>'admin.demo.index',
									'url'=>url('admin/demo'),
									'icon'=>'<i class="fa fa-home"><i>'
							  ],
					],
					'article'	 =>[
										[
											'name'=>'文章列表',
											'tag'=>'admin.article.index',
											'url'=>url('admin/article'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'文章分类',
											'tag'=>'admin.article_cat.index',
											'url'=>url('admin/article_cat'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
					],
					'supplier'	 =>[
										[
											'name'=>'供货商列表',
											'tag'=>'admin.supplier.index',
											'url'=>url('admin/supplier'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],				
					],
					'privi'	 =>[
										[
											'name'=>'管理员列表',
											'tag'=>'admin.administrator.index',
											'url'=>url('admin/administrator'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'系统所有权限清单',
											'tag'=>'admin.privi.index',
											'url'=>url('admin/privi'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
										[
											'name'=>'角色管理',
											'tag'=>'admin.role.index',
											'url'=>url('admin/role'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'日志管理',
											'tag'=>'admin.log.index',
											'url'=>url('admin/log'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],


										[
											'name'=>'退出登录',
											'tag'=>'admin.administrator.logout',
											'url'=>url('admin/administrator/logout'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
					],
					'template' =>[
						                [
											'name'=>'模板设置',
											'tag'=>'admin.template.index',
											'url'=>url('admin/template'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
										[
											'name'=>'模板颜色选择器',
											'tag'=>'admin.style.index',
											'url'=>url('admin/style'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
								],
		            'config' =>[
						                [
											'name'=>'商城系统设置',
											'tag'=>'admin.config.index',
											'url'=>url('admin/config'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'首页幻灯片设置',
											'tag'=>'admin.slider.index',
											'url'=>url('admin/slider'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'分类广告管理',
											'tag'=>'admin.catad.index',
											'url'=>url('admin/catad'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'支付方式',
											'tag'=>'admin.payment.index',
											'url'=>url('admin/payment'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'配送方式',
											'tag'=>'admin.shipping.index',
											'url'=>url('admin/shipping'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],

										[
											'name'=>'地区运费设置',
											'tag'=>'admin.region_shipping.index',
											'url'=>url('admin/region_shipping'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
					],
					'mobile' =>[
						                [
											'name'=>'wap版本基本设置',
											'tag'=>'admin.wap.index',
											'url'=>url('admin/wap'),
											'icon'=>'<i class="fa fa-cogs"></i>'
										],
					],
	],
];
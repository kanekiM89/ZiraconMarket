<?php
class ControllerExtensionModuleCategoryList extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/category_list');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['categories'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 5;
		}
		

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		if (!empty($setting['categoriesadded'])) {

            $data['heading_title'] = $setting['name'];

            $data['slider'] = $setting['slider'];

            $categories_data = array();

			foreach ($setting['categoriesadded'] as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
                    $categories_data[] = $category_info;
				}
			}

			$categories = array_slice($categories_data, 0, (int)$setting['limit']);

				foreach ($categories as $category) {
						if ($category['top']) {
							// Level 2
							$children_data = array();


							$children = $this->model_catalog_category->getCategories($category['category_id']);


			                /* category image code*/
							if ($category['image']) {
								$image = $this->model_tool_image->resize($category['image'], $setting['width'], $setting['height']);
							} else {
								$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
							}


							foreach ($children as $child) {
								$filter_data = array(
									'filter_category_id'  => $child['category_id'],
									'filter_sub_category' => true
								);

								/* 2 Level Sub Categories START */
								$childs_data = array();
								$child_2 = $this->model_catalog_category->getCategories($child['category_id']);

								foreach ($child_2 as $childs) {
									$filter_data = array(
										'filter_category_id'  => $childs['category_id'],
										'filter_sub_category' => true
									);

									$childs_data[] = array(
										'name'  => $childs['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
										'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $childs['category_id'])
									);
								}
								/* 2 Level Sub Categories END */

								$children_data[] = array(
									'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
									'childs' => $childs_data,
									'column'   => $child['column'] ? $child['column'] : 1,
									'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
								);
							}




							// Level 1
							$data['categories'][] = array(
								'name'     => $category['name'],
								'thumb'       => $image,
								'children' => $children_data,
								'column'   => $category['column'] ? $category['column'] : 1,
								'href'     => $this->url->link('product/category', 'path=' . $category['category_id']),
							);
						}
				}
		}

		$data['language'] = $this->config->get('config_language');

		if ($data['categories']) {
			return $this->load->view('extension/module/category_list', $data);
		}
	}
}
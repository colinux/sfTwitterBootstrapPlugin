<?php

/**
 * Default formatter class for forms
 */
class sfWidgetFormSchemaFormatterTwitterBootstrapHorizontal extends sfWidgetFormSchemaFormatterTwitterBootstrap
{
  protected $errorRowFormatInARow   = "<span class=\"help-inline\">%error%</span>",
            $rowFormat              = "<div class=\"control-group%if_error_class%\">\n%label%\n  <div class=\"controls\">%field%%error%%help%\n%hidden_fields%</div></div>\n",
            $helpFormat             = '<span class="help-block">%help%</span>';


  /**
   * Widget formatter for radio buttons (one radio button per line)
   *
   * Uses it in as the "formatter" widget option like this:
   *   'formatter' => array('sfWidgetFormSchemaFormatterTwitterBootstrapHorizontal', 'widgetRadioFormatterBlock')
   */
  static public function widgetRadioFormatterBlock($widget, $inputs) {
    return self::widgetListFormatter($widget, $inputs, 'radio');
  }


  /**
   * Widget formatter for radio buttons (all radio button on the same line)
   *
   * Uses it in as the "formatter" widget option like this:
   *   'formatter' => array('sfWidgetFormSchemaFormatterTwitterBootstrapHorizontal', 'widgetRadioFormatterInline')
   */
  static public function widgetRadioFormatterInline($widget, $inputs) {
    return self::widgetListFormatter($widget, $inputs, 'radio inline');
  }


  /**
   * Widget formatter for checkbox (one checkbox per line)
   *
   * Uses it in as the "formatter" widget option like this:
   *   'formatter' => array('sfWidgetFormSchemaFormatterTwitterBootstrapHorizontal', 'widgetCheckboxFormatterBlock')
   */
  static public function widgetCheckboxFormatterBlock($widget, $inputs) {
    return self::widgetListFormatter($widget, $inputs, 'checkbox');
  }


  /**
   * Widget formatter for checkbox (all checkbox on the same line)
   *
   * Uses it in as the "formatter" widget option like this:
   *   'formatter' => array('sfWidgetFormSchemaFormatterTwitterBootstrapHorizontal', 'widgetCheckboxFormatterInline')
   */
  static public function widgetCheckboxFormatterInline($widget, $inputs) {
    return self::widgetListFormatter($widget, $inputs, 'checkbox inline');
  }


  /**
   * Widget formatter for radio and checkbox block and inline.
   */
  static protected function widgetListFormatter($widget, $inputs, $label_class) {
    $rows = array();
    foreach ($inputs as $input) {
      $rows[] = $widget->renderContentTag('label', $input['input'] . ' ' .$input['label'], array('class' => $label_class));
    }

    return implode("\n", $rows);
  }
}

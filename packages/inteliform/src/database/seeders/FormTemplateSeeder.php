<?php

namespace Softwarescares\Inteliform\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliform\app\Models\FormTemplate;

class FormTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormTemplate::truncate();

        $faker = \Faker\Factory::create();

            //array('type' => array ('id' => '','type' => 'text'))['type']['type']

        $settings = array (
  0 => 
  array (
    'id' => '',
    'title' => 'field title',
    'image' => '',
    'value' => '',
    'description' => 'text field description',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'text',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => 'off',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Text',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-paragraph fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'TextInput',
      ),
    ),
  ),
  1 => 
  array (
    'id' => '',
    'title' => 'field title',
    'image' => '',
    'value' => '',
    'description' => '',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'textarea',
      ),
      'cols' => 
      array (
        'id' => '',
        'cols' => 4,
      ),
      'rows' => 
      array (
        'id' => '',
        'rows' => 6,
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => 'off',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Paragraph',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'TextAreaInput',
      ),
    ),
  ),
  2 => 
  array (
    'id' => '',
    'title' => 'field title',
    'image' => '',
    'value' => '',
    'description' => '',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'tel',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => 'off',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'pattern' => 
      array (
        'id' => '',
        'pattern' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Phone',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-phone fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'TelInput',
      ),
    ),
  ),
  3 => 
  array (
    'id' => '',
    'title' => 'field title',
    'image' => '',
    'value' => '',
    'description' => '',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'password',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => 'off',
      ),
      'inputmode' => 
      array (
        'id' => '',
        'inputmode' => false,
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Password',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-lock fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'PasswordInput',
      ),
    ),
  ),
  4 => 
  array (
    'title' => 'field title',
    'image' => '',
    'value' => '',
    'description' => '',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'radio',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => '',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Radio',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-dot-circle fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'RadioInput',
      ),
    ),
    'options' => 
    array (
    ),
  ),
  5 => 
  array (
    'id' => '',
    'title' => 'checkbox field',
    'image' => '',
    'value' => '',
    'description' => '',
    'name' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'checkbox',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => '',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Checkbox',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-check-square fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'CheckboxInput',
      ),
    ),
    'options' => 
    array (
    ),
  ),
  6 => 
  array (
    'id' => '',
    'title' => 'color field title',
    'name' => 'color',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'color',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Color',
      ),
      'icon' => 
      array (
        'id' => '',
        'icons' => '<i class="fas fa-palette fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'ColorInput',
      ),
    ),
  ),
  7 => 
  array (
    'id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'date',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Date',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-calendar-week fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'DateInput',
      ),
    ),
  ),
  8 => 
  array (
    'id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'time',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => false,
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'min' => 
      array (
        'id' => '',
        'min' => '',
      ),
      'max' => 
      array (
        'id' => '',
        'max' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Time',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-clock fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'TimeInput',
      ),
    ),
  ),
  9 => 
  array (
    'id' => '',
    'title' => 'email field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'email',
      ),
      'default' => 
      array (
        'id' => '',
        'default' => '',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => 'off',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'size' => 
      array (
        'id' => '',
        'size' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Email',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-inbox fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'EmailInput',
      ),
    ),
  ),
  10 => 
  array (
    'id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'file',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'multiple' => 
      array (
        'id' => '',
        'multiple' => false,
      ),
      'accept' => 
      array (
        'id' => '',
        'accept' => '',
      ),
      'maxNoOfFiles' => 
      array (
        'id' => '',
        'maxNoOfFiles' => '',
      ),
      'maxFileSize' => 
      array (
        'id' => '',
        'maxFileSize' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'File Upload',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-upload fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'FileInput',
      ),
    ),
  ),
  11 => 
  array (
    'id' => '',
    'title' => 'number field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'number',
      ),
      'autocorrect' => 
      array (
        'id' => '',
        'autocorrect' => true,
      ),
      'default' => 
      array (
        'id' => '',
        'default' => false,
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => false,
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => 'field',
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Number',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-sort-numeric-up-alt fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'NumberInput',
      ),
    ),
  ),
  12 => 
  array (
    'id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'range',
      ),
      'autocorrect' => 
      array (
        'id' => '',
        'autocorrect' => true,
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => false,
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'min' => 
      array (
        'id' => '',
        'min' => 20,
      ),
      'max' => 
      array (
        'id' => '',
        'max' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Range',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-weight fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'RangeInput',
      ),
    ),
  ),
  13 => 
  array (
    'id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'search',
      ),
      'placeholder' => 
      array (
        'id' => '',
        'placeholder' => true,
      ),
      'default' => 
      array (
        'id' => '',
        'default' => true,
      ),
      'autocorrect' => 
      array (
        'id' => '',
        'autocorrect' => true,
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => false,
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Search',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-search fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'SearchInput',
      ),
    ),
  ),
  14 => 
  array (
    'id' => '',
    'user_id' => '',
    'title' => 'field title',
    'name' => '',
    'image' => '',
    'value' => '',
    'description' => '',
    'settings' => 
    array (
      'type' => 
      array (
        'id' => '',
        'type' => 'url',
      ),
      'autocorrect' => 
      array (
        'id' => '',
        'autocorrect' => true,
      ),
      'autocomplete' => 
      array (
        'id' => '',
        'autocomplete' => false,
      ),
      'required' => 
      array (
        'id' => '',
        'required' => false,
      ),
      'disabled' => 
      array (
        'id' => '',
        'disabled' => false,
      ),
      'minlength' => 
      array (
        'id' => '',
        'minlength' => 3,
      ),
      'maxlength' => 
      array (
        'id' => '',
        'maxlength' => 20,
      ),
      'pattern' => 
      array (
        'id' => '',
        'pattern' => '',
      ),
      'field' => 
      array (
        'id' => '',
        'field' => 'Url',
      ),
      'icon' => 
      array (
        'id' => '',
        'icon' => '<i class="fas fa-link fa-2x"></i>',
      ),
      'component' => 
      array (
        'id' => '',
        'component' => 'UrlInput',
      ),
    ),
  ),
);


        for ($i=1; $i < 20; $i++)
        { 
                $formTemplate = [];

                $formTemplate['title'] = $faker->realText(10);
                $formTemplate['description'] = $faker->paragraph(5);
                $formTemplate['cover'] = $faker->imageUrl();
                $formTemplate['sections'] = [];

                $sections = $faker->numberBetween(5,8);
                for ($l=1; $l < $sections; $l++)
                {
                  $sectionkey = 'section' . $l;
                  $formTemplate['sections'][$sectionkey] = [
                       'title' => $faker->word,
                       'description' => $faker->paragraph(2),
                       'cover' => $faker->imageUrl(),
                       "fields" => [

                       ]
                  ];

                  $fields = $faker->numberBetween(10,15);

                  for ($j=1; $j < $fields; $j++)
                  {
                    $fieldkey = 'field' . $j;

                    $formTemplate['sections'][$sectionkey]['fields'][$fieldkey] = [
                         'title' => $faker->word,
                         'image' => $faker->imageUrl(),
                         'value' => '',
                         'description' => $faker->realText(10),
                         'name' => $faker->word,
                         'settings' => [

                         ],
                         'options' => [

                         ]
                    ];

                      $formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['settings'] = $settings[$faker->numberBetween(0,14)]['settings'];

          
                    $options = [];

                    $optionsno = $faker->numberBetween(10,15);

                    for ($k=0; $k < $optionsno; $k++) { 
                        array_push($options,
                            [
                            'name' => $faker->word(),
                            'value' => $faker->word()
                          ]
                        );
                    }

                    //print_r($formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['settings']);
                    //return 1;

                    if ($formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['settings']['type']['type'] == 'checkbox' ||
                        $formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['settings']['type']['type'] == 'radio')
                    {

                          $formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['options'] = $options;
                        }
                    }

                  }


                   FormTemplate::create([
                          'title' => $faker->realText(10),
                          'description' => $faker->paragraph(5),
                          'cover' => $faker->imageUrl(),
                          'sections' => json_encode($formTemplate['sections'])
                   ]);


                }
        }
}

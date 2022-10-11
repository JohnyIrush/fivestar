<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FieldOption;
use Softwarescares\Inteliform\app\Models\FieldSetting;
use Softwarescares\Inteliform\app\Models\Field;
use Softwarescares\Inteliform\app\Models\FormSection;
use Softwarescares\Inteliform\app\Models\FormTemplate;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormTemplateRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormTemplateRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Inteliform\app\Http\Controllers\Controller;

class FormTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormTemplateRequest $request, Store $store, FormTemplate $formTemplate)
    {
              Vote::updateOrCreate(
                  ['id' => $request->id],
                  ['votes' => $votes]
              );        

        $formTemplate = $store->store($request, $formTemplate);

        return response()->json($formTemplate);
    }

    public function storeForm(StoreFormTemplateRequest $request)
    {   
        //return response()->json($request->id);
        $formTemplate = [
            "id" => '',
            "title" => '',
            "description" => '',
            "cover" => '',
            "sections" => [
                /*
                "fields" => [
                    "settings" => [

                    ],
                    "options" => [

                    ]
                    */
                ]
           ];

                $formdetails = FormTemplate::updateOrCreate(
                    ['id' => $request->id],
                    [
                    "title" => $request->title,
                    "cover" => $request->cover,
                    "description" => $request->description,
                   ]
                ); 
                //return response()->json($formdetails);
                $formTemplate['id'] = $formdetails->id;
                $formTemplate['title'] = $formdetails->title;
                $formTemplate['description'] = $formdetails->description;
                $formTemplate['cover'] = $formdetails->cover;

                foreach ($request->sections as $sectionkey => $section)
                {
                  $formSection = FormSection::updateOrCreate(
                      ['id' => $section['id']],
                      [
                      'form_template_id' => 1,//$formdetails->id,
                      "title" => $section['title'],
                      "cover" => $section['cover'],
                      "description" => $section['description'],
                      ]
                      );

                  $formTemplate['sections'][0][$sectionkey] = [
                       'id' => $formSection->id,
                       'title' => $formSection->title,
                       'description' => $formSection->description,
                       'cover' => $formSection->cover,
                       "fields" => [

                       ]
                  ];


                  foreach ($section['fields'] as $fieldkey => $field)
                  {
                    $sectionField = FormSection::updateOrCreate(
                        ['id' => $field['id']],
                         ['form_section_id' => $formSection['id'],
                         'title' => $field['title'],
                         'image' => $field['image'],
                         'value' => $field['value'],
                         'description' => $field['description'],
                         'name' => $field['name'],]
                    );

                    $formTemplate['sections'][0][$sectionkey]['fields'][$fieldkey] = [
                         'id' => $sectionField->id,
                         'title' => $sectionField->title,
                         'image' => $sectionField->image,
                         'value' => $sectionField->value,
                         'description' => $sectionField->description,
                         'name' => $sectionField->name,
                         'settings' => [

                         ],
                         'options' => [

                         ]
                    ];

                    foreach ($field['settings'] as $settingkey => $setting)
                    {
                      $fieldSetting = FieldSetting::updateOrCreate(
                          ['id' => $setting['id']],
                           [
                            'field_id' => $sectionField['id'],
                            'key' => $settingkey,
                            'value' => $setting[$settingkey]
                           ]
                      );

                      $formTemplate['sections'][0][$sectionkey]['fields'][0][$fieldkey]['settings'][0][$settingkey] = [
                                       'id' => $fieldSetting->id,
                                       $fieldSetting->key => $fieldSetting->value
                                    ];
                    }

                    foreach ($field['options'] as $optionkey => $option)
                    {
                      $fieldOption = FieldSetting::updateOrCreate(
                          ['id' => $option['id']],
                          [
                          'field_id' => $sectionField['id'],
                          'key' => $optionkey,
                          'value' =>  $option[$optionkey]
                          ]
                      );


                      $formTemplate['sections'][0][$sectionkey]['fields'][0][$fieldkey]['options'][0][$optionkey] = [
                                       [
                                       'id' => $fieldOption->id,
                                       $fieldOption->key => $fieldOption->value
                                       ]
                                    ];
                    }

                  }
                }  

        return response()->json($formTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormTemplateRequest  $request
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateFormTemplateRequest $request, FormTemplate $formTemplate, Update $update)
    {
        $formTemplate = $update->update($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, FormTemplate $formTemplate, Delete $delete)
    {
        $formTemplate = $delete->delete($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);

    }
}

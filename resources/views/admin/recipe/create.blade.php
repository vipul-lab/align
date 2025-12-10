@extends('admin.layouts.app')
@section('content')
    <x-pageTitle title="Add Workouts">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-3 cursor-pointer group active" id="step1">
                <span class="size-8 rounded-full flex items-center justify-center border border-gray-400 text-gray-400 group-[.active]:bg-primary group-[.active]:border-primary group-[.active]:text-white">1</span>
                <span class="text-gray-400 group-[.active]:text-black">Base details</span>
            </div>
            <span class="h-px bg-gray-400 w-12"></span>
            <div class="flex items-center gap-3 cursor-pointer group" id="step2">
                <span class="size-8 rounded-full flex items-center justify-center border border-gray-400 text-gray-400 group-[.active]:bg-primary group-[.active]:border-primary group-[.active]:text-white">2</span>
                <span class="text-gray-400 group-[.active]:text-black">Required Ingredients</span>
            </div>
            <span class="h-px bg-gray-400 w-12"></span>
            <div class="flex items-center gap-3 cursor-pointer group" id="step3">
                <span class="size-8 rounded-full flex items-center justify-center border border-gray-400 text-gray-400 group-[.active]:bg-primary group-[.active]:border-primary group-[.active]:text-white">3</span>
                <span class="text-gray-400 group-[.active]:text-black">Cooking Steps</span>
            </div>
        </div>
    </x-pageTitle>
    
    <div class="p-4">
        <form class="bg-white">
            <div class="p-8" data-step="step1">
                <div class="grid grid-cols-3 gap-5 py-8">
                    <div>
                        <h6 class="font-medium">Upload thumbnail</h6>
                        <p class="text-gray-400 text-sm">Recommanded resolution is 640*640 with file size less than 2MB, keep visual elements centered</p>
                    </div>
                    <div class="col-span-2">
                        <div class="size-28 flex flex-col border border-dashed border-gray-200 bg-gray-100 items-center justify-center">
                            <i class="fa-solid fa-plus"></i>
                            <p class="text-gray-400">Upload</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-5 py-8 border-y border-y-gray-300">
                    <div>
                        <h6 class="font-medium">Base Details</h6>
                        <p class="text-gray-400 text-sm">Set Recipe details: image, category, level, time etc.</p>
                    </div>
                    <div class="col-span-2 grid grid-cols-2 gap-6">
                        <div>
                            <label class="kt-form-label">Recipe name</label>
                            <input class="kt-input" placeholder="Enter name">
                        </div>
                        <div>
                            <label class="kt-form-label">Estimated Time</label>
                            <x-select>
                                <option>One</option>
                                <option>One</option>
                                <option>One</option>
                            </x-select>
                        </div>
                        <div>
                            <label class="kt-form-label">Skill Level</label>
                            <div class="flex flex-wrap gap-2.5">
                                <div class="flex items-center gap-2.5">
                                    <input type="radio" class="kt-radio" id="radio_1" name="level" value="1" />
                                    <label class="kt-label" for="radio_1">Beginner</label>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <input type="radio" class="kt-radio" id="radio_2" name="level" checked="" value="2" />
                                    <label class="kt-label" for="radio_2">Intermediate</label>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <input type="radio" class="kt-radio" id="radio_3" name="level" value="3" />
                                    <label class="kt-label" for="radio_3">Advanced</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="kt-form-label">Best for</label>
                            <div class="flex flex-wrap gap-2.5">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Breakfast</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Lunch</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Dinner</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="kt-form-label">Phase</label>
                            <div class="flex flex-wrap gap-2.5">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Ovulation</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Luteal</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Follicular</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="kt-checkbox" id="check" value="1" />
                                    <label class="kt-label" for="check" >Menstrual</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="kt-form-label">Is it gluten free</label>
                            <div class="flex flex-wrap gap-2.5">
                                <div class="flex items-center gap-2.5">
                                    <input type="radio" class="kt-radio" id="radio_1" name="level" value="1" />
                                    <label class="kt-label" for="radio_1">Yes</label>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <input type="radio" class="kt-radio" id="radio_2" name="level" checked="" value="2" />
                                    <label class="kt-label" for="radio_2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 justify-end mt-8">
                    <button class="kt-btn kt-btn-primary next">Next <i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <div class="p-8" data-step="step2">
                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <h6 class="font-medium">Required Ingredients</h6>
                        <p class="text-gray-400 text-sm">Add the details of every required ingredient along with the amount needed for the recipe.</p>
                    </div>
                    <div class="col-span-2 gap-4">
                        <div class="exerciseBox border border-gray-200 rounded-lg">
                            <div class="flex gap-3 items-center p-5 border-b border-b-gray-200 exerciseItem">
                                <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                                <div class="size-[34px] flex-none bg-gray-100 text-gray-400 border border-dashed border-gray-200 flex items-center justify-center">
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                                <x-input type="text" placeholder="Ingredients name" />
                                <div class="kt-input-group">
                                    <x-input class="border-r-0 rounded-r-none" type="text" placeholder="Quantity" />
                                    <x-select>
                                        <option>gram</option>
                                        <option>KG</option>
                                    </x-select>
                                </div>
                                <i class="cursor-pointer fa-solid fa-trash-can text-red-500 exerciseItemRemove"></i>
                            </div>
                            <div class="flex gap-3 items-center p-5">
                                <button type="button" class="kt-btn kt-btn-outline kt-btn-primary addExerciseBtn"><i class="fa-solid fa-plus"></i> Add Ingredient</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 justify-end addExerciseArea border-t border-t-gray-300 pt-6 mt-6">
                    <button type="button" class="kt-btn kt-btn-primary kt-btn-outline back"><i class="fa-solid fa-angle-left"></i> Back</button>
                    <button type="button" class="kt-btn kt-btn-primary next">Next <i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <div class="p-8" data-step="step3">
                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <h6 class="font-medium">Required Equipments</h6>
                        <p class="text-gray-300">Add the equipment needed to perform the exercises</p>
                    </div>
                    <div class="col-span-2 gap-4">
                        <div class="cookingStepsBox border border-gray-200 rounded-lg">
                            <div class="flex gap-3 items-center p-5 border-b border-b-gray-200 cookingSteps">
                                <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                                <div class="size-[34px] flex-none bg-gray-100 text-gray-400 border border-dashed border-gray-200 flex items-center justify-center">
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                                <x-input type="text" placeholder="Step 1" />
                                <i class="cursor-pointer fa-solid fa-trash-can text-red-500 cookingStepsRemove"></i>
                            </div>
                            <div class="flex gap-3 items-center p-5">
                                <button type="button" class="kt-btn kt-btn-outline kt-btn-primary addcookingSteps"><i class="fa-solid fa-plus"></i> Add Ingredient</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 justify-end mt-8">
                    <button type="button" class="kt-btn kt-btn-primary kt-btn-outline back"><i class="fa-solid fa-angle-left"></i> Back</button>
                    <button type="button" class="kt-btn kt-btn-primary">Add Workout</button>
                </div>
            </div>
        </form>
    </div>

@endsection
@push('scripts')
<script src="{{ asset('assets/vendors/sortablejs.js') }}"></script>
<script>
$(document).ready(function () {

    let currentStep = "step1";

    // Hide all steps except first
    $('[data-step]').hide();
    $('[data-step="step1"]').show();

    // Highlight active step tab
    function setActive(step) {
        currentStep = step;

        // Show only the selected step
        $('[data-step]').hide();
        $('[data-step="' + step + '"]').show();

        // Step label highlight
        $("#step1, #step2, #step3").removeClass("active");
        $("#" + step).addClass("active");
    }

    // NEXT BUTTON
    $(".next").click(function (e) {
        e.preventDefault();

        if (currentStep === "step1") setActive("step2");
        else if (currentStep === "step2") setActive("step3");
    });

    // BACK BUTTON
    $(".back").click(function (e) {
        e.preventDefault();

        if (currentStep === "step3") setActive("step2");
        else if (currentStep === "step2") setActive("step1");
    });

    // Optional: Click step titles to navigate
    $("#step1, #step2, #step3").click(function () {
        const step = $(this).attr("id");
        setActive(step);
    });

    $(document).on("click", ".addExerciseBtn", function (e) {
         e.preventDefault();   // stop form submit
        e.stopPropagation();  // stop other handlers

        let parent = $(this).closest(".exerciseBox");      // main card
        let clone = parent.find(".exerciseItem").first().clone(); // clone first item

        // Clear input/select values
        clone.find("input").val("");
        clone.find("select").prop("selectedIndex", 0);

        parent.find(".exerciseItem").last().after(clone);
        exerciseItem(document.querySelector(".kt-accordion-content"));
    });

    $(document).on("click", ".addcookingSteps", function (e) {
         e.preventDefault();   // stop form submit
        e.stopPropagation();  // stop other handlers

        let parent = $(this).closest(".cookingStepsBox");      // main card
        let clone = parent.find(".cookingSteps").first().clone(); // clone first item

        // Clear input/select values
        clone.find("input").val("");

        parent.find(".cookingSteps").last().after(clone);
        cookingSteps(document.querySelector(".cookingStepsBox"));
    });
  
    function cookingSteps(containerEl) {
        if (!containerEl) return;
        new Sortable(containerEl, {
            animation: 150,
            handle: ".fa-grip-dots-vertical", // only drag from grip
            draggable: ".cookingSteps",
            group: {
                name: "cookingSteps-group",
                pull: false,
                put: false
            }
        });
    }
    function exerciseItem(containerEl) {
        if (!containerEl) return;
        new Sortable(containerEl, {
            animation: 150,
            handle: ".fa-grip-dots-vertical", // only drag from grip
            draggable: ".exerciseItem",
            group: {
                name: "exercise-group",
                pull: false,
                put: false
            }
        });
    }

      $(document).on("click", ".exerciseItemRemove", function (e) {
        e.preventDefault();
        e.stopPropagation();
        // Remove the exercise row
        $(this).closest(".exerciseItem").remove();
    });

});
</script>
@endpush

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
                <span class="text-gray-400 group-[.active]:text-black">Structure Exercises</span>
            </div>
            <span class="h-px bg-gray-400 w-12"></span>
            <div class="flex items-center gap-3 cursor-pointer group" id="step3">
                <span class="size-8 rounded-full flex items-center justify-center border border-gray-400 text-gray-400 group-[.active]:bg-primary group-[.active]:border-primary group-[.active]:text-white">3</span>
                <span class="text-gray-400 group-[.active]:text-black">Required Equipments</span>
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
                        <p class="text-gray-400 text-sm">Set workout details: image, category, level, time etc.</p>
                    </div>
                    <div class="col-span-2 grid grid-cols-2 gap-4">
                        <div>
                            <label class="kt-form-label">Workout name</label>
                            <input class="kt-input" placeholder="Enter name">
                        </div>
                        <div>
                            <label class="kt-form-label">Workout category</label>
                            <x-select>
                                <option>One</option>
                                <option>One</option>
                                <option>One</option>
                            </x-select>
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
                            <label class="kt-form-label">Label</label>
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
                            <label class="kt-form-label">For</label>
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
                    </div>
                </div>
                <div class="flex gap-2 justify-end mt-8">
                    <button class="kt-btn kt-btn-primary next">Next <i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <div class="p-8" data-step="step2">
                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <h6 class="font-medium">Structure Exercises</h6>
                        <p class="text-gray-400 text-sm">Structure workout into rounds and exercises</p>
                    </div>
                    <div class="col-span-2 gap-4">

                        <div data-kt-accordion="true" data-kt-accordion-expand-all="true" class="kt-accordion kt-accordion-outline" id="exerciseRoundTemplate">
                            <div data-kt-accordion-item="true" class="kt-accordion-item border border-gray-200 rounded-lg  exerciseBox active">
                                <div class="flex gap-3 items-center p-5"
                                    id="accordion_toggle_0"
                                    data-kt-accordion-toggle="true"
                                    aria-controls="accordion_content_0">
                                        <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                                        <x-input type="text" placeholder="Enter round name (ex warm-up)" />
                                        <i class="fa-solid fa-trash-can text-red-500"></i>
                                        <span aria-hidden="true">
                                            <span class="kt-accordion-indicator-on leading-0">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </span>
                                            <span class="kt-accordion-indicator-off leading-0">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </span>
                                        </span>
                                </div>
                                <div
                                    class="kt-accordion-content border-t-gray-200!"
                                    aria-labelledby="accordion_toggle_0"
                                    id="accordion_content_0"
                                    >
                                    <div class="flex gap-3 items-center p-5 border-b border-b-gray-200 exerciseItem">
                                        <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                                        <div class="size-[34px] flex-none bg-gray-100 text-gray-400 border border-dashed border-gray-200 flex items-center justify-center">
                                            <i class="fa-solid fa-camera"></i>
                                        </div>
                                        <x-input type="text" placeholder="Exercise name (jumping jacks)" />
                                        <x-select>
                                            <option>option1</option>
                                            <option>option1</option>
                                            <option>option1</option>
                                        </x-select>
                                        <i class="cursor-pointer fa-solid fa-trash-can text-red-500 exerciseItemRemove"></i>
                                    </div>
                                    <div class="flex gap-3 items-center p-5">
                                        <button type="button" class="kt-btn kt-btn-outline kt-btn-primary addExerciseBtn"><i class="fa-solid fa-plus"></i> Add Exercise</button>
                                        <button type="button" class="kt-btn kt-btn-outline kt-btn-primary"><i class="fa-solid fa-stopwatch"></i> Add Rest</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="kt-btn kt-btn-primary kt-btn-outline w-full mt-4" id="addRoundBtn">Add Exercises Round</button>
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
                        <textarea class="kt-textarea" placeholder="Add Equipment separate them with “,” "></textarea>
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

    
    let roundTemplate = `
        <div data-kt-accordion-item="true" class="kt-accordion-item border border-gray-200 rounded-lg exerciseBox">
            <div class="flex gap-3 items-center p-5"
            id="accordion_toggle_0"
            data-kt-accordion-toggle="true"
            aria-controls="accordion_content_0"
            >
                <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                <x-input type="text" placeholder="Enter round name (ex warm-up)" />
                <i class="fa-solid fa-trash-can text-red-500"></i>
                <span aria-hidden="true">
                    <span class="kt-accordion-indicator-on leading-0">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                    <span class="kt-accordion-indicator-off leading-0">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </span>
            </div>
            <div class="kt-accordion-content border-t-gray-200! hidden"
                aria-labelledby="accordion_toggle_0"
                id="accordion_content_0"
            >
                <div class="flex gap-3 items-center p-5 border-b border-b-gray-200 exerciseItem">
                    <i class="fa-solid fa-grip-dots-vertical hover:cursor-move text-gray-400"></i>
                    <div class="size-[34px] flex-none bg-gray-100 text-gray-400 border border-dashed border-gray-200 flex items-center justify-center">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <x-input type="text" placeholder="Enter round name (ex warm-up)" />
                    <x-select>
                        <option>option1</option>
                        <option>option1</option>
                        <option>option1</option>
                    </x-select>
                    <i class="cursor-pointer fa-solid fa-trash-can text-red-500 exerciseItemRemove"></i>
                </div>
                <div class="flex gap-3 items-center p-5">
                    <button type="button" class="kt-btn kt-btn-outline kt-btn-primary addExerciseBtn">
                        <i class="fa-solid fa-plus"></i> Add Exercise
                    </button>
                    <button type="button" class="kt-btn kt-btn-outline kt-btn-primary">
                        <i class="fa-solid fa-stopwatch"></i> Add Rest
                    </button>
                </div>
            </div>
        </div>
        `;


    $(document).on("click", "#addRoundBtn", function () {

         // Select the accordion container
        let accordion = $("[data-kt-accordion='true']");
        // Count exercise rounds inside THIS accordion
        let index = accordion.find(".exerciseBox").length;
        let newRound = $(roundTemplate);

        // Header
        let header = newRound.find("[data-kt-accordion-toggle]");
        header.attr("id", "accordion_toggle_" + index);
        header.attr("aria-controls", "accordion_content_" + index);

        // Content
        let body = newRound.find(".kt-accordion-content");
        body.attr("id", "accordion_content_" + index);
        body.attr("aria-labelledby", "accordion_toggle_" + index);

        // Append to accordion container
        $("[data-kt-accordion='true']").append(newRound);
         exerciseBox(document.querySelector(".kt-accordion"));
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

    // Helper: init Sortable for the wrapper that reorders rounds (exerciseBox)
    function exerciseBox(containerEl) {
        if (!containerEl) return;
        new Sortable(containerEl, {
            animation: 150,
            handle: ".fa-grip-dots-vertical", // choose an appropriate handle (or header)
            draggable: ".exerciseBox",
            group: {
                name: "exerciseBox-group",
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

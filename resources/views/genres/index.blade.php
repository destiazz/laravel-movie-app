@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
            </h2>

            <nav>
                <a
                    href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Two Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">ID</p>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="font-medium">Name</p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="font-medium">Description</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">Actions</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="text-sm font-medium text-black dark:text-white">
                                1
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Comedy
                        </p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Comedy film, or comedy drama sometimes known as dramedi (an abbreviation of the words drama and comedy) is a subgenre within the contemporary form of tragicomedy, especially on television, which combines elements of comedy and drama.  This genre places characters in funny situations for the sake of humor.  Comedy is often positioned as the opposite of tragedy.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="text-sm font-medium text-black dark:text-white">
                                2
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Horror
                        </p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Horror films are a film genre that attempts to provoke emotions in the form of fear or disgust from the audience.  Their storylines often involve themes of death, the supernatural, or mental illness.  Many horror film stories center on a certain evil antagonist.
                        Horror films often explore dark subject matter and may deal with transgressive topics or themes, the cinematic techniques used in horror films have been proven to provoke psychological reactions in the audience
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="text-sm font-medium text-black dark:text-white">
                                3
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Action
                        </p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Action films are usually characterized by fight choreography, fire explosions, gun shots, etc.  In terms of story, action films usually tell the story of a character who has to risk his life.
                        Because lives are at stake, it's not surprising that there are lots of fights and shootouts between the characters.  Usually the goal is no joke: survival, saving loved ones, even saving the world.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="text-sm font-medium text-black dark:text-white">
                                4
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Romance
                        </p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        A romance film is a love story captured in a visual medium that focuses on the passion, emotions and affectionate involvement of the main characters and the journey of their truly powerful, true and pure love that will take them through dating, courtship or marriage.
                        Romance films make love stories or the search for strong and pure love and romance becomes the focus of the main plot.  Sometimes, romantic lovers face obstacles such as financial, physical illness, various forms of discrimination, psychological or family restrictions that threaten to break their love relationship.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="text-sm font-medium text-black dark:text-white">
                                5
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Thriller
                        </p>
                    </div>
                    <div class="col-span-5 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        The thriller genre can provide a sense of suspense, curiosity and uncertainty to the audience.  Apart from that, the storyline can maintain the intensity of tension until the film's climax. This genre usually tells the story of ordinary people who are trapped in extraordinary or critical situations.
                        Apart from that, the main character in a thriller genre film can be a murderer, fugitive, psychopath, terrorist, and can also be a detective.  This genre is a very flexible genre, this is because it can intersect with other types of film genres.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ====== Table Two End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection

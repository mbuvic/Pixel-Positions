<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form class="mt-6">
                <input type="text" placeholder="Search for Jobs ..." class="bg-white/5 border border-white/10 rounded-xl py-3 px-5 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-wrap gap-2 mt-6">
                <x-tag>Laravel</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Angular</x-tag>
                <x-tag>Alpine</x-tag>
                <x-tag>Tailwind</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>HTML</x-tag>
                <x-tag>CSS</x-tag>
                <x-tag>GraphQL</x-tag>
                <x-tag>APIs</x-tag>
                <x-tag>Testing</x-tag>
                <x-tag>Deployment</x-tag>
                <x-tag>Serverless</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Mobile</x-tag>
                <x-tag>Desktop</x-tag>
                <x-tag>UI/UX</x-tag>
                <x-tag>Security</x-tag>
                <x-tag>Accessibility</x-tag>
                <x-tag>Performance</x-tag>
                <x-tag>Testing</x-tag>
                <x-tag>APIs</x-tag>
                <x-tag>Deployment</x-tag>
                <x-tag>Serverless</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Mobile</x-tag>
                <x-tag>Desktop</x-tag>
                <x-tag>UI/UX</x-tag>
                <x-tag>Security</x-tag>
                <x-tag>Accessibility</x-tag>
                <x-tag>Performance</x-tag>
                <x-tag>Testing</x-tag>
                <x-tag>APIs</x-tag>
                <x-tag>Deployment</x-tag>
                <x-tag>Serverless</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Mobile</x-tag>
                <x-tag>Desktop</x-tag>
                <x-tag>UI/UX</x-tag>
                <x-tag>Security</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method='POST' action='/jobs'>
        <x-form.input label='Title' name='Title' placeholder="CEO" />
        <x-form.input label='Salary' name='Salary' placeholder="$90,000 USD" />
        <x-form.input label='Location' name='Location' placeholder="Winter Park,Florida" />

       <x-form.select label='Schedule' name='schedule'>
        <option>Part Time</option>
        <option>Full Time</option>
       </x-form.select>



        <x-forms.input label='URL' name='url' placeholder='https://acme.com/jobs/ceo-wanted' />
        <x-forms.checkbox label='Feature (Costs Extra)' name='featured' />
        
        <x-forms.divider />
        
        <x-form.input label='Tags (comma separate)' name='tags'
            placeholder='Laracasts, video, education' />

            <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>

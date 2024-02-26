<x-dashboard-layout>
    <x-section.dashboard-films :data="$data" :films="$films"/>
    <x-modals.film-create :data="$data"/>
    <script src="/assets/js/film-edit.js"></script>
</x-dashboard-layout>


<section class="container py-5 border-top">
    <x-client.common.title.center-title title="Upcoming Exhibition" />
    @if ($exhibitions->count()>0)
        <x-client.exhibitions.exhibition-card :exhibition="$exhibitions[0]"  :shadow="false"/>
    @endif
    
</section>
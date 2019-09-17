<entry>
    <id>{{ $entry->getUrl() }}</id>
    <link type="text/html" rel="alternate" href="{{ $entry->getUrl() }}" />
    <title>{{ $entry->title }}</title>
    <published>{{ date(DATE_ATOM, $entry->date) }}</published>
    <updated>{{ date(DATE_ATOM, $entry->date) }}</updated>
    <author>
        <name>{{ $entry->authorname }}</name>
    </author>
    <summary type="html">{{ $entry->excerpt() }}...</summary>
    <content type="html"><![CDATA[
        @include('_posts.' . $entry->getFilename())
    ]]></content>
</entry>
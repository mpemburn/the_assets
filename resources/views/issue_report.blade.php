<style>
    td.critical {
        background-color: red;
    }
    td.major {
        background-color: orange;
    }
    td.minor {
        background-color: yellow;
    }
</style>
<table>
@foreach($issues as $issue)
    <tr>
        <td class="{!! $issue[0] !!}">{!! $issue[0] !!}</td>
        <td class="{!! $issue[0] !!}">{!! $issue[1] !!}</td>
        <td class="{!! $issue[0] !!}">{!! $issue[3] !!}</td>
    </tr>
    @if($issueReport->hasAffectedDevices($issue[2]))
    <tr>
        <td colspan="3">
            <table>
                @foreach($issueReport->getAffectedDevices($issue[2])->toArray() as $key => $device)
                    <tr>
                        <td style="padding-left: 30px;">
                            {!! current($device) !!}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px;">
                            ({!! $inventory->getDeviceString(key($device)) !!})
                        </td>
                    </tr>

                @endforeach
            </table>
        </td>
    </tr>
    @endif
@endforeach
</table>

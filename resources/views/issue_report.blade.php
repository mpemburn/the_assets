<table>
@foreach($issues as $issue)
    <tr>
        <td>{!! $issue[0] !!}</td>
        <td>{!! $issue[1] !!}</td>
        <td>{!! $issue[3] !!}</td>
    </tr>
    @if($issueReport->hasAffectedDevices($issue[2]))
    <tr>
        <table>
            @foreach($issueReport->getAffectedDevices($issue[2])->toArray() as $key => $device)
                <tr>
                    <td width="20px">&nbsp;</td>
                    <td>
                        {!! current($device) !!}
                    </td>
                </tr>
                <tr>
                    <td width="20px">&nbsp;</td>
                    <td>
                        ({!! $inventory->getDeviceString(key($device)) !!})
                    </td>
                </tr>

            @endforeach
        </table>
    </tr>
    @endif
@endforeach
</table>

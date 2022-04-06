<form action="{{route('postSendEmail')}}" method="POST" class="form-horizontal form-label-left">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="jp_cp_right_side_wrapper">
        <div class="jp_cp_right_side_inner_wrapper">
            <h2>{{ __('Gửi Email bằng Queue') }}</h2>
            <table>
                <tbody>
                <tr>
                    <td class="td-w25">{{ __('Tên Test') }}</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">
                        <input type="text" name="name" class="form-control" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td class="td-w25">{{ __('Email nhận') }}</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">
                        <input type="text" name="email" class="form-control" maxlength="100">
                    </td>
                </tr>
                {{-- <tr>
                    <td class="td-w25">{{ __('Gửi Đi Sau Bao Nhiêu Giờ') }}</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">
                        <input type="text" name="time" class="form-control" maxlength="100">
                    </td>
                </tr> --}}
                <tr>
                    <td class="td-w25">{{ __('Số Lượng Tin Gửi Đi') }}</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">
                        <input type="text" name="amount" class="form-control" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td class="td-w25">{{ __('Nội Dung Dằn Mặt') }}</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">
                        <input type="text" name="content" class="form-control" maxlength="100">
                    </td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <div class="col-md-12 col-sm-6 col-xs-12 col-md-offset-3">
                <input type="submit" name="submit_save" class="btn btn-success" value="Test Start">
            </div>
        </div>
</div>
</form>

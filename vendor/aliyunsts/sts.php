<?php
include_once 'aliyun-php-sdk-core/Config.php';
use Sts\Request\V20150401 as Sts;
class AliYunSTS {

    private static function read_file($fname) {
        $content = '';
        if( !file_exists( $fname ) ) {
            echo "The file $fname does not exist\n";
            exit( 0 );
        }
        $handle = fopen( $fname, "rb" );
        while ( !feof( $handle ) ) {
            $content .= fread( $handle, 10000 );
        }
        fclose( $handle );
        return $content;
    }

    public static function sts($accessKey, $accessSecret, $roleArn, $bucket, $expires = 900) {
        $content = self::read_file( __DIR__ . '/config.json' );
        $myjsonarray = json_decode( $content );
        
        $accessKeyID = $accessKey; // $myjsonarray->AccessKeyID;
        $accessKeySecret = $accessSecret; // $myjsonarray->AccessKeySecret;
        $roleArn = $roleArn; // $myjsonarray->RoleArn;
        $tokenExpire = $expires; // $myjsonarray->TokenExpireTime;
        $policy = str_replace( '$BUCKET_NAME', $bucket, self::read_file( __DIR__ . '/policy/bucket_read_write_policy.txt' ) ); // self::read_file( __DIR__ . '/' . $myjsonarray->PolicyFile )
                                                                                                                              // var_export($policy);exit;
        $iClientProfile = DefaultProfile::getProfile( "cn-hangzhou", $accessKeyID, $accessKeySecret );
        $client = new DefaultAcsClient( $iClientProfile );
        
        $request = new Sts\AssumeRoleRequest();
        $request->setRoleSessionName( "client_name" );
        $request->setRoleArn( $roleArn );
        $request->setPolicy( $policy );
        $request->setDurationSeconds( $tokenExpire );
        $response = $client->doAction( $request );
        
        $rows = array ();
        $body = $response->getBody();
        $content = json_decode( $body );
        $rows ['status'] = $response->getStatus();
        if( $response->getStatus() == 200 ) {
            $rows ['AccessKeyId'] = $content->Credentials->AccessKeyId;
            $rows ['AccessKeySecret'] = $content->Credentials->AccessKeySecret;
            $rows ['Expiration'] = $content->Credentials->Expiration;
            $rows ['SecurityToken'] = $content->Credentials->SecurityToken;
        }
        else {
            $rows ['AccessKeyId'] = "";
            $rows ['AccessKeySecret'] = "";
            $rows ['Expiration'] = "";
            $rows ['SecurityToken'] = "";
        }
        return $rows;
    }
}
?>
